# # PipelineCardWithIncludes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Ідентифікатор картки воронки | [optional]
**contact_id** | **int** | Ідентифікатор контактної особи картки воронки | [optional]
**source_id** | **int** | Ідентифікатор джерела |
**manager_id** | **int** | Ідентифікатор відповідального менеджера | [optional]
**target_id** | **int** | Ідентифікатор створеної на основі картки сутності | [optional]
**target_type** | **string** | Тип створеної на основі картки сутності. Можливі варіанти: &#x60;order&#x60; (замовлення), &#x60;lead&#x60; (картка) | [optional]
**status_id** | **int** | Ідентифікатор статусу картки воронки | [optional]
**title** | **string** | Назва картки воронки | [optional]
**manager_comment** | **string** | Коментар менеджера | [optional]
**utm_source** | **string** | Джерело кампанії | [optional]
**utm_medium** | **string** | Тип трафіку | [optional]
**utm_campaign** | **string** | Назва кампанії | [optional]
**utm_term** | **string** | Ключове слово | [optional]
**utm_content** | **string** | Ідентифікатор оголошення | [optional]
**is_finished** | **string** | Ідентифікатор закриття картки воронки | [optional]
**status_changed_at** | **string** | Дата зміни статусу картки воронки в UTC форматі | [optional]
**communicate_at** | **string** | Дата і час планованого контакту по картці воронки у UTC форматі | [optional]
**created_at** | **string** | Дата створення картки воронки в UTC форматі | [optional]
**updated_at** | **string** | Дата останньої зміни картки воронки в UTC форматі | [optional]
**contact** | [**\OpenAPI\Client\Model\PipelineCardWithIncludesContact**](PipelineCardWithIncludesContact.md) |  | [optional]
**products** | [**\OpenAPI\Client\Model\PipelineCardWithIncludesProductsInner[]**](PipelineCardWithIncludesProductsInner.md) | Товари в картці воронки. Повертаються тільки, якщо вказати &#x60;include&#x3D;products&#x60; | [optional]
**manager** | [**\OpenAPI\Client\Model\PipelineCardWithIncludesManager**](PipelineCardWithIncludesManager.md) |  | [optional]
**status** | [**\OpenAPI\Client\Model\PipelineCardWithIncludesStatus**](PipelineCardWithIncludesStatus.md) |  | [optional]
**payments** | [**\OpenAPI\Client\Model\PipelineCardWithIncludesPaymentsInner[]**](PipelineCardWithIncludesPaymentsInner.md) | Платежі в замовленні. Повертаються тільки, якщо вказати &#x60;include&#x3D;payments&#x60; | [optional]
**custom_fields** | [**\OpenAPI\Client\Model\OrderWithIncludesCustomFieldsInner[]**](OrderWithIncludesCustomFieldsInner.md) | Користувацькі поля в картці воронки. Повертаються тільки заповнені, якщо вказати &#x60;include&#x3D;custom_fields&#x60; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
