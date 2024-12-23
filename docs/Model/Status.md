# # Status

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Ідентифікатор статусу |
**name** | **string** | Назва |
**alias** | **string** | Системна назва |
**is_active** | **bool** | Стан активності | [optional]
**group_id** | **int** | Ідентифікатор групи статусу | [optional]
**is_closing_order** | **bool** | Визначає, чи може замовлення бути відмічене як закрите після присвоения статуса | [optional]
**is_reserved** | **bool** | Визначає, чи статус зарезервований і чи може він бути видалений | [optional]
**expiration_period** | **int** | Максимальний термін перебування замовлення в статусі, після якого воно вважається протермінованим, в секундах | [optional]
**created_at** | **string** | Дата створення в UTC форматі | [optional]
**updated_at** | **string** | Дата останньої зміни в UTC форматі | [optional]
**deleted_at** | **string** | Дата видалення в UTC форматі | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
