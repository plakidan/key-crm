# # CreateNewOrderRequestShipping

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**delivery_service_id** | **int** | ID служби доставки у KeyCRM | [optional]
**tracking_code** | **string** | Трек-номер відправлення служби доставки | [optional]
**shipping_service** | **string** | Назва служби доставки | [optional]
**shipping_address_city** | **string** |  | [optional]
**shipping_address_country** | **string** |  | [optional]
**shipping_address_region** | **string** | Область, штат, регіон | [optional]
**shipping_address_zip** | **string** |  | [optional]
**shipping_secondary_line** | **string** |  | [optional]
**shipping_receive_point** | **string** | Точка видачі замовлення | [optional]
**recipient_full_name** | **string** | Ім&#39;я отримувача (якщо відрізняється від покупця) | [optional]
**recipient_phone** | **string** | Номер телефону отримувача (якщо відрізняється від покупця). Рекомендуємо передавати в міжнародному форматі з плюсом | [optional]
**warehouse_ref** | **string** | UUID складу Нової Пошти (обов&#39;язково з параметром delivery_service_id - ID служби доставки НП в СРМ) | [optional]
**shipping_date** | **string** | Дата доставки / відправки | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
