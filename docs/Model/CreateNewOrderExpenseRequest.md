# # CreateNewOrderExpenseRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**expense_type_id** | **int** | ID типу витрати в KeyCRM, обов&#39;язковий параметр, якщо &#x60;expense_type&#x60; не заданий | [optional]
**expense_type** | **string** | Назва типу витрати, обов&#39;язковий параметр, якщо &#x60;expense_type_id&#x60; не заданий | [optional]
**amount** | **float** | Сума витрати |
**description** | **string** | Коментар до витрати | [optional]
**payment_date** | **string** | Дата і час витрати. Якщо не передається, буде використаний поточний час | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
