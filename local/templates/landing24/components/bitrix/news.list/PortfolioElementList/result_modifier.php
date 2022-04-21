<?php

if (!empty($arResult['ITEMS'])) {//Получаю все Id различных сайтов, которые входят в разделы: Лендинг, Промо сайты и т.д.
    $arElementsIds = [];
    foreach ($arResult['ITEMS'] as  $arItem) {
        if (isset($arItem['ID'])) {
            $arElementsIds[] = $arItem['ID'];
        }
    }
          
    $dbSections = CIBlockElement::GetElementGroups($arElementsIds);//получаю зависимости между разделами и сайтами
    $arSections = [];
    while ($el = $dbSections->Fetch()) {//преобразую объект в массив, который содержит тоже самое, что dbSections
        $arSections[] = $el;
    }
    foreach ($arResult['ITEMS'] as $itemKey => $arItem) {//6 итераций, по числу сайтов.
        // Получение Названия основного раздела
         if (isset($arItem['IBLOCK_SECTION_ID'])) { // id сайтов
            $searchSectId = $arItem['IBLOCK_SECTION_ID'];//id сайта которого нужно найти
            // echo "$searchSectId <br>";

            foreach ($arSections as $section) {//8 итераций 
                if ($section['ID'] === $searchSectId) {//если id совподают
                    $arResult['ITEMS'][$itemKey]['SECTION_NAME'] = $section['NAME'];//создаю в arResult новый вложенный
                                                            // массив SECTION_NAME со списком основных разделов
                                                            
                }
            }

                
        }

        if (!isset($arResult['ITEMS'][$itemKey]['SECTION_NAME'])) {//если ни к какому разделу не приписан сайт
            $arResult['ITEMS'][$itemKey]['SECTION_NAME'] = '';
        }

        // Получение кодов разделов для элемента
        if (isset($arItem['ID'])) {
            $arElementSectionsCodes = [];
            foreach ($arSections as $section) {
                if ($arItem['ID'] == $section['IBLOCK_ELEMENT_ID']) {
                    $arElementSectionsCodes[] = $section['CODE'];
                }
            }

            $arResult['ITEMS'][$itemKey]['SECTIONS_CODES'] = implode(' ', $arElementSectionsCodes);
        } else {
            $arResult['ITEMS'][$itemKey]['SECTIONS_CODES'] = '';
        }
    }
    
}