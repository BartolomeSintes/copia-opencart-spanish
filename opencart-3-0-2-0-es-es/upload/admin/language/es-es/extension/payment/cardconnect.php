<?php

$_['heading_title'] = 'CardConnect';
$_['tab_settings'] = 'Preferencias';
$_['tab_order_status'] = 'Estado del pedido';
$_['text_extension'] = 'Extensiones';
$_['text_success'] = 'Success: You have modified CardConnect payment module!';
$_['text_edit'] = 'Edit CardConnect';
$_['text_cardconnect'] = '<a href="http://www.cardconnect.com" target="_blank"><img src="view/image/payment/cardconnect.png" alt="CardConnect" title="CardConnect"></a>';
$_['text_payment'] = 'Pago';
$_['text_authorize'] = 'Autorizar';
$_['text_live'] = 'En producción';
$_['text_test'] = 'Prueba';
$_['text_no_cron_time'] = 'El cronjob aún no se ha ejecutado';
$_['text_payment_info'] = 'Información de pago';
$_['text_payment_method'] = 'Medio de pago';
$_['text_card'] = 'Card';
$_['text_echeck'] = 'eCheck';
$_['text_reference'] = 'Referencia';
$_['text_update'] = 'Actualizar';
$_['text_order_total'] = 'Total del pedido';
$_['text_total_captured'] = 'Total Captured';
$_['text_capture_payment'] = 'Capture Payment';
$_['text_refund_payment'] = 'Refund Payment';
$_['text_void'] = 'Nulo';
$_['text_transactions'] = 'Transacciones';
$_['text_column_type'] = 'Tipo';
$_['text_column_reference'] = 'Referencia';
$_['text_column_amount'] = 'Monto';
$_['text_column_status'] = 'Estado';
$_['text_column_date_modified'] = 'Fecha de modificación';
$_['text_column_date_added'] = 'Fecha de alta';
$_['text_column_update'] = 'Actualizar';
$_['text_column_void'] = 'Nulo';
$_['text_confirm_capture'] = '¿Estás seguro de querer capturar el pago?';
$_['text_confirm_refund'] = '¿Estás seguro de que quieres reembolsar el pago?';
$_['text_inquire_success'] = 'Inquire was successful';
$_['text_capture_success'] = 'Capture request was successful';
$_['text_refund_success'] = 'Refund request was successful';
$_['text_void_success'] = 'Void request was successful';
$_['entry_merchant_id'] = 'ID del comerciante';
$_['entry_api_username'] = 'Nombre de usuario de la API';
$_['entry_api_password'] = 'Contraseña de la API';
$_['entry_token'] = 'Token secreto';
$_['entry_transaction'] = 'Transacción';
$_['entry_environment'] = 'Entorno';
$_['entry_site'] = 'Site';
$_['entry_store_cards'] = 'Tarjetas de casas comerciales';
$_['entry_echeck'] = 'eCheck';
$_['entry_total'] = 'Total';
$_['entry_geo_zone'] = 'Zona geográfica';
$_['entry_status'] = 'Estado';
$_['entry_logging'] = 'Registro de depuración';
$_['entry_sort_order'] = 'Orden';
$_['entry_cron_url'] = 'URL del cronjob';
$_['entry_cron_time'] = 'Cron Job Last Run';
$_['entry_order_status_pending'] = 'Pendiente';
$_['entry_order_status_processing'] = 'Procesando';
$_['help_merchant_id'] = 'Your personal CardConnect account merchant ID.';
$_['help_api_username'] = 'Your username to access the CardConnect API.';
$_['help_api_password'] = 'Your password to access the CardConnect API.';
$_['help_token'] = 'Enter a random token for security or use the one generated.';
$_['help_transaction'] = 'Choose \'Payment\' to capture the payment immediately or \'Authorize\' to have to approve it.';
$_['help_site'] = 'This determines the first part of the API URL. Only change if instructed.';
$_['help_store_cards'] = 'Whether you want to store cards using tokenization.';
$_['help_echeck'] = 'Whether you want to offer the ability to pay using an eCheck.';
$_['help_total'] = 'The checkout total the order must reach before this payment method becomes active. Must be a value with no currency sign.';
$_['help_logging'] = 'Enabling debug will write sensitive data to a log file. You should always disable unless instructed otherwise.';
$_['help_cron_url'] = 'Set a cron job to call this URL so that the orders are auto-updated. It is designed to be ran a few hours after the last capture of a business day.';
$_['help_cron_time'] = 'This is the last time that the cron job URL was executed.';
$_['help_order_status_pending'] = 'The order status when the order has to be authorized by the merchant.';
$_['help_order_status_processing'] = 'The order status when the order is automatically captured.';
$_['button_inquire_all'] = 'Inquire All';
$_['button_capture'] = 'Captura';
$_['button_refund'] = 'Reembolso';
$_['button_void_all'] = 'Void All';
$_['button_inquire'] = 'Inquire';
$_['button_void'] = 'Nulo';
$_['error_permission'] = 'Warning: You do not have permission to modify payment CardConnect!';
$_['error_merchant_id'] = '¡Se requiere el ID del comerciante!';
$_['error_api_username'] = '¡Se requiere el nombre de usuario de la API!';
$_['error_api_password'] = '¡Se requiere la contraseña de la API!';
$_['error_token'] = 'Secret Token Required!';
$_['error_site'] = 'Site Required!';
$_['error_amount_zero'] = 'Amount must be higher than zero!';
$_['error_no_order'] = 'No matching order info!';
$_['error_invalid_response'] = 'Invalid response received!';
$_['error_data_missing'] = 'Missing data!';
$_['error_not_enabled'] = 'Module not enabled!';
