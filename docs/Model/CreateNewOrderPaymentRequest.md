# # CreateNewOrderPaymentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment_method_id** | **int** | ID методу платежу в KeyCRM, обов&#39;язковий параметр, якщо &#x60;payment_method&#x60; не заданий | [optional]
**payment_method** | **string** | Назва методу платежу, обов&#39;язковий параметр, якщо &#x60;payment_method_id&#x60; не заданий | [optional]
**amount** | **float** | Сума платежу |
**status** | **string** | Статус оплати | [optional] [default to 'paid']
**description** | **string** | Коментар до платежу | [optional]
**payment_date** | **string** | Дата і час платежу. Якщо не передається, буде використаний поточний час | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
