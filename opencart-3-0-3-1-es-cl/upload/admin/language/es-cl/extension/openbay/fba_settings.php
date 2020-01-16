<?php

$_['heading_title'] = 'Configuraciones';
$_['text_openbay'] = 'OpenBay Pro';
$_['text_fba'] = 'Fulfillment by Amazon';
$_['text_success'] = 'Tus configuraciones han sido guardadas';
$_['text_status'] = 'Estado';
$_['text_account_ok'] = 'La conexión a Fulfillment by Amazon está correcta';
$_['text_api_ok'] = 'Conexión OK a la API';
$_['text_api_status'] = 'Conexión de la API';
$_['text_edit'] = 'Editar las configuraciones de Fulfillment by Amazon';
$_['text_standard'] = 'Estándar';
$_['text_expedited'] = 'Expedito';
$_['text_priority'] = 'Prioridad';
$_['text_fillorkill'] = 'Fill or Kill';
$_['text_fillall'] = 'Llenar todo';
$_['text_fillallavailable'] = 'Fill All Available';
$_['text_prefix_warning'] = 'Do not change this setting after orders have been sent to Amazon, only set this when you first install.';
$_['text_disabled_cancel'] = 'Disabled - do not automatically cancel fulfillments';
$_['text_validate_success'] = '¡Los detalles de tu API funcionan correctamente! Debes hacer clic en guardar para asegurarte de que las configuraciones estén guardadas.';
$_['text_register_banner'] = 'Click here if you need to register for an account';
$_['entry_api_key'] = 'Token de la API';
$_['entry_encryption_key'] = 'Clave de cifrado 1';
$_['entry_encryption_iv'] = 'Clave de cifrado 2';
$_['entry_account_id'] = 'ID de cuenta';
$_['entry_send_orders'] = 'Enviar los pedidos automáticamente';
$_['entry_fulfill_policy'] = 'Política de cumplimiento';
$_['entry_shipping_speed'] = 'Velocidad predeterminada del despacho';
$_['entry_debug_log'] = 'Habilitar el registro de depuración';
$_['entry_new_order_status'] = 'New fulfillment trigger';
$_['entry_order_id_prefix'] = 'Prefijo del ID de pedido';
$_['entry_only_fill_complete'] = 'Todos los artículos deben ser FBA';
$_['help_api_key'] = 'This is your API token, obtain this from your OpenBay Pro account area';
$_['help_encryption_key'] = 'This is your Encryption key #1, obtain this from your OpenBay Pro account area';
$_['help_encryption_iv'] = 'Esta es tu clave de cifrado número 2, obtén esto desde el área de tu cuenta de OpenBay Pro';
$_['help_account_id'] = 'This is the account ID that matches the registered Amazon account for OpenBay Pro, obtain this from your OpenBay Pro account area';
$_['help_send_orders'] = 'Orders containing matching Fulfillment by Amazon products will be send to Amazon automatically';
$_['help_fulfill_policy'] = 'The default fulfillment policy (FillAll - All fulfillable items in the fulfillment order are shipped. The fulfillment order remains in a processing state until all items are either shipped by Amazon or cancelled by the seller. FillAllAvailable - All fulfillable items in the fulfillment order are shipped. All unfulfillable items in the order are cancelled by Amazon.FillOrKill - If an item in a fulfillment order is determined to be unfulfillable before any shipment in the order moves to the Pending status (the process of picking units from inventory has begun), then the entire order is considered unfulfillable. However, if an item in a fulfillment order is determined to be unfulfillable after a shipment in the order moves to the Pending status, Amazon cancels as much of the fulfillment order as possible.)';
$_['help_shipping_speed'] = 'This is the default shipping speed category to apply to new orders, different service levels may incurr different costs';
$_['help_debug_log'] = 'Debug logs will record information to a log file about actions the module does. This should be left enabled to help find the cause of any problems.';
$_['help_new_order_status'] = 'This is the order status which will trigger the order to be created for fulfillment. Ensure that this is using a status only after you have received payment.';
$_['help_order_id_prefix'] = 'Having an order prefix will help identify orders that have come from your store not from other integrations. This is very helpful when merchants sell on many marketplaces and use FBA';
$_['help_only_fill_complete'] = 'Esto solo permitirá pedidos para enviarse a cumplimiento si TODOS los artículos en el pedido coinciden con un artículo de Fulfillment by Amazon. Si algún artículo no coincidiera, el pedido completo permanecerá sin llenar.';
$_['error_api_connect'] = 'Falló la conexión con la API';
$_['error_account_info'] = 'No se pudo verificar la conexión de la API a Fulfillment by Amazon';
$_['error_api_key'] = 'El token de la API no es válido';
$_['error_api_account_id'] = 'El ID de la cuenta no es válido';
$_['error_encryption_key'] = 'La clave de cifrado número 1 no es válida';
$_['error_encryption_iv'] = 'La clave de cifrado número 2 no es válida';
$_['error_validation'] = 'Hubo un error al validar tus detalles';
$_['tab_api_info'] = 'Detalles de la API';
$_['button_verify'] = 'Verificar detalles';
