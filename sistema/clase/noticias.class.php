<?php
/**
* Copyright (C) 2015 FlameCMS <http://flamenet.github.io/FlameCMS/>
*
* This program is free software; you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation; either version 2 of the License, or
* (at your option) any later version.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with this program; if not, write to the Free Software
* Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
**/

class Noticias {

	public function LimiteDePalabras($texto, $longitud = 100, $terminando = '...', $exacto = true, $ConsiderarHtml = false) {
		if (is_array($terminando)) {
			extract($terminando);
		}
		if ($ConsiderarHtml) {
			if (mb_strlen(preg_replace('/<.*?>/', '', $texto)) <= $longitud) {
				return $texto;
			}
			$LongitudTotal = mb_strlen($terminando);
			$EtiquetasAbiertas = array();
			$truncar = '';
			preg_match_all('/(<\/?([\w+]+)[^>]*>)?([^<>]*)/', $texto, $tags, PREG_SET_ORDER);
			foreach ($tags as $tag) {
				if (!preg_match('/img|br|input|hr|area|base|basefont|col|frame|isindex|link|meta|param/s', $tag[2])) {
					if (preg_match('/<[\w]+[^>]*>/s', $tag[0])) {
						array_unshift($EtiquetasAbiertas, $tag[2]);
					} else if (preg_match('/<\/([\w]+)[^>]*>/s', $tag[0], $closeTag)) {
						$pos = array_search($closeTag[1], $EtiquetasAbiertas);
						if ($pos !== false) {
							array_splice($EtiquetasAbiertas, $pos, 1);
						}
					}
				}
				$truncar .= $tag[1];
	 
				$LongitudContenido = mb_strlen(preg_replace('/&[0-9a-z]{2,8};|&#[0-9]{1,7};|[0-9a-f]{1,6};/i', ' ', $tag[3]));
				if ($LongitudContenido + $LongitudTotal > $longitud) {
					$left = $longitud - $LongitudTotal;
					$entitiesLength = 0;
					if (preg_match_all('/&[0-9a-z]{2,8};|&#[0-9]{1,7};|[0-9a-f]{1,6};/i', $tag[3], $entities, PREG_OFFSET_CAPTURE)) {
						foreach ($entities[0] as $entity) {
							if ($entity[1] + 1 - $entitiesLength <= $left) {
								$left--;
								$entitiesLength += mb_strlen($entity[0]);
							} else {
								break;
							}
						}
					}
	 
					$truncar .= mb_substr($tag[3], 0 , $left + $entitiesLength);
					break;
				} else {
					$truncar .= $tag[3];
					$LongitudTotal += $LongitudContenido;
				}
				if ($LongitudTotal >= $longitud) {
					break;
				}
			}
	 
		} else {
			if (mb_strlen($texto) <= $longitud) {
				return $texto;
			} else {
				$truncar = mb_substr($texto, 0, $longitud - strlen($terminando));
			}
		}
		if (!$exacto) {
			$espacios = mb_strrpos($truncar, ' ');
			if (isset($espacios)) {
				if ($ConsiderarHtml) {
					$bits = mb_substr($truncar, $espacios);
					preg_match_all('/<\/([a-z]+)>/', $bits, $droppedTags, PREG_SET_ORDER);
					if (!empty($droppedTags)) {
						foreach ($droppedTags as $closingTag) {
							if (!in_array($closingTag[1], $EtiquetasAbiertas)) {
								array_unshift($EtiquetasAbiertas, $closingTag[1]);
							}
						}
					}
				}
				$truncar = mb_substr($truncar, 0, $espacios);
			}
		}

		$truncar .= $terminando;
	 
		if ($ConsiderarHtml) {
			foreach ($EtiquetasAbiertas as $tag) {
				$truncar .= '';
			}
		}
		return $truncar;
	}

	public function TiempoPublicacion($fecha){

		if(empty($fecha)){
			return "No hay fecha prevista";
		}

		$periodos	= array("segundo", "minuto", "hora", "d&iacute;a", "semana", "mes", "a&ntilde;o", "d&eacute;cada");
		$longitudes	= array("60","60","24","7","4.35","12","10");
		$ahora		= time();

		$unix_fecha = strtotime( $fecha );

		/**
		 *  Comprobar la validez de la fecha
		 */

		if( empty( $unix_fecha ) )
		{
			return "Fecha Desconocida";
		}

		/**
		 *  Fecha futura o fecha pasada
		 */

		if( $ahora > $unix_fecha )
		{
			$diferencia = $ahora - $unix_fecha;
			$tiempo = "hace";
		}
		else
		{
			$diferencia = $unix_fecha - $ahora;
			$tiempo = "desde ahora, hace";
		}

		for( $j = 0; $diferencia >= $longitudes[$j] && $j < count($longitudes)-1; $j++ )
		{
			$diferencia /= $longitudes[$j];
		}

		$diferencia = round( $diferencia );

		if( $diferencia != 1 )
		{
			$periodos[$j].= "s";
		}

		return " {$tiempo} $diferencia $periodos[$j]";
	}
}
