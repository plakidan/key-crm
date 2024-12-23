# # UpdateExistingBuyerRequestShippingInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address** | **string** | Адреса доставки | [optional]
**additional_address** | **string** |  | [optional]
**city** | **string** | Місто доставки | [optional]
**region** | **string** | Область, штат, регіон | [optional]
**zip_code** | **string** | Індекс | [optional]
**country** | **string** | Країна доставки | [optional]
**recipient_full_name** | **string** | Ім&#39;я отримувача (якщо відрізняється від покупця) | [optional]
**recipient_phone** | **string** | Номер телефону отримувача (якщо відрізняється від покупця). Рекомендуємо передавати в міжнародному форматі з плюсом | [optional]
**warehouse_ref** | **string** | UUID складу Нової Пошти (обов&#39;язково з параметром delivery_service_id - ID служби доставки НП в СРМ) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
