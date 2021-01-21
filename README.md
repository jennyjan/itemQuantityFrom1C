# itemQuantityFrom1c
Класс для получения количества товара из 1С

##### Вызов

    <?php
        $arResult["1C_PARAMS"]['ТаблицаТоваров']['СтрокиТаблицыТоваров'][]['КодТовара'] = '123456789';
        $data1cHandler = new ItemQuantityFrom1C\Data1cHandler("url", "login", "password");
        $itemCountArr = $data1cHandler->getItemQuantity($arResult["1C_PARAMS"]);
    ?>
