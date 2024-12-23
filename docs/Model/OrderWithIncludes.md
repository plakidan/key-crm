# # OrderWithIncludes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Ідентифікатор замовлення | [optional]
**parent_id** | **int** | Ідентифікатор батьківського замовлення | [optional]
**source_uuid** | **string** | Унікальний ідентифікатор замовлення із завантаженого джерела | [optional]
**source_id** | **int** | Ідентифікатор джерела |
**status_id** | **int** | Ідентифікатор статусу замовлення | [optional]
**status_group_id** | **int** | Ідентифікатор групи статусу замовлення | [optional]
**grand_total** | **float** | Фінальна вартість | [optional]
**promocode** | **string** | Промо код | [optional]
**total_discount** | **float** | Сума знижки | [optional]
**expenses_sum** | **float** | Сума витрат | [optional]
**shipping_price** | **float** | Вартість доставки | [optional]
**wrap_price** | **float** | Вартість подарункової упаковки | [optional]
**taxes** | **float** | Сума податків | [optional]
**manager_comment** | **string** | Коментар менеджера | [optional]
**buyer_comment** | **string** | Коментар клієнта менеджера | [optional]
**gift_message** | **string** | Вітальне повідомлення | [optional]
**is_gift** | **bool** | Позначено як подарунок | [optional]
**payment_status** | **string** | Статус оплати | [optional]
**last_synced_at** | **string** | Дата останньої синхронізації із джерелом в UTC форматі | [optional]
**created_at** | **string** | Дата створення замовлення в системі в UTC форматі | [optional]
**ordered_at** | **string** | Дата створення замовлення на джерелі в UTC форматі. Може не співпадати з &#x60;created_at&#x60;. При використанні фільтра по даті створення, вибірка робиться по цьому параметру | [optional]
**updated_at** | **string** | Дата останньої зміни замовлення в UTC форматі | [optional]
**closed_at** | **string** | Дата закриття замовлення в UTC форматі | [optional]
**buyer** | [**\OpenAPI\Client\Model\OrderWithIncludesBuyer**](OrderWithIncludesBuyer.md) |  | [optional]
**products** | [**\OpenAPI\Client\Model\OrderWithIncludesProductsInner[]**](OrderWithIncludesProductsInner.md) | Товари в замовленні. Повертаються тільки, якщо вказати &#x60;include&#x3D;products.offer&#x60; | [optional]
**manager** | [**\OpenAPI\Client\Model\OrderWithIncludesManager**](OrderWithIncludesManager.md) |  | [optional]
**tags** | [**\OpenAPI\Client\Model\OrderWithIncludesTagsInner[]**](OrderWithIncludesTagsInner.md) | Теги в замовленні. Повертаються тільки, якщо вказати &#x60;include&#x3D;tags&#x60; | [optional]
**status** | [**\OpenAPI\Client\Model\OrderWithIncludesStatus**](OrderWithIncludesStatus.md) |  | [optional]
**marketing** | [**\OpenAPI\Client\Model\OrderWithIncludesMarketing**](OrderWithIncludesMarketing.md) |  | [optional]
**payments** | [**\OpenAPI\Client\Model\OrderWithIncludesPaymentsInner[]**](OrderWithIncludesPaymentsInner.md) | Платежі в замовленні. Повертаються тільки, якщо вказати &#x60;include&#x3D;payments&#x60; | [optional]
**shipping** | [**\OpenAPI\Client\Model\OrderWithIncludesShipping**](OrderWithIncludesShipping.md) |  | [optional]
**expenses** | [**\OpenAPI\Client\Model\OrderWithIncludesExpensesInner[]**](OrderWithIncludesExpensesInner.md) | Витрати в замовленні. Повертаються тільки, якщо вказати &#x60;include&#x3D;expenses&#x60; | [optional]
**custom_fields** | [**\OpenAPI\Client\Model\OrderWithIncludesCustomFieldsInner[]**](OrderWithIncludesCustomFieldsInner.md) | Користувацькі поля в замовленні. Повертаються тільки заповнені, якщо вказати &#x60;include&#x3D;custom_fields&#x60; | [optional]
**assigned** | [**\OpenAPI\Client\Model\OrderWithIncludesAssignedInner[]**](OrderWithIncludesAssignedInner.md) | Відповідальні користувачі в замовленні. Повертаються тільки, якщо вказати &#x60;include&#x3D;assigned&#x60; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
