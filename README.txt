Сайт: Второй Медицинский Мозг
Хостинг: Netlify
Бэкенд: https://web-production-b0acb.up.railway.app

Структура:
- index.html          — главная страница с кнопкой оплаты
- thanks.html         — страница после успешной оплаты
- payment-failed.html — страница после неудачной оплаты

Настройки в личном кабинете Т-Банка:
SuccessURL:      https://ВАШ-ДОМЕН/thanks.html
FailURL:         https://ВАШ-ДОМЕН/payment-failed.html
NotificationURL: https://web-production-b0acb.up.railway.app/tbank/webhook

Terminal Key сейчас тестовый (DEMO) — прописан в index.html.
При переходе на боевой терминал:
1. Заменить TBANK_TERMINAL_KEY в index.html (строка ~1371)
2. Обновить TBANK_PASSWORD в переменных Railway
