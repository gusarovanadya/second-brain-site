Сайт: Второй Медицинский Мозг
Хостинг: Netlify
Бэкенд: https://web-production-b0acb.up.railway.app

Структура:
- index.html          — главная страница с кнопкой оплаты
- thanks.html         — страница после успешной оплаты
- payment-failed.html — страница после неудачной оплаты

Настройки в личном кабинете Т-Банка:
SuccessURL:      https://second-brain-site.netlify.app/thanks.html
FailURL:         https://second-brain-site.netlify.app/payment-failed.html
NotificationURL: https://web-production-b0acb.up.railway.app/tbank/webhook

Terminal Key — прописан в index.html.
