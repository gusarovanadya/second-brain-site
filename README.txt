Что куда загрузить

1. Загрузить thank-you.html в корень сайта
   URL:
   https://ВАШ-ДОМЕН/thank-you.html

2. Загрузить payment-failed.html в корень сайта
   URL:
   https://ВАШ-ДОМЕН/payment-failed.html

3. Загрузить tbank-notify.php в корень сайта
   URL:
   https://ВАШ-ДОМЕН/tbank-notify.php

4. Создать рядом папку logs
   Если не получится создать вручную, PHP попытается создать ее сам.

Что указать в Т-Банке или в Init:

SuccessURL:
https://ВАШ-ДОМЕН/thank-you.html

FailURL:
https://ВАШ-ДОМЕН/payment-failed.html

NotificationURL:
https://ВАШ-ДОМЕН/tbank-notify.php

Как проверить:
1. Откройте вручную:
   https://ВАШ-ДОМЕН/thank-you.html
   https://ВАШ-ДОМЕН/payment-failed.html

2. После тестовой оплаты должен открыться thank-you.html

3. После оплаты проверьте файл:
   logs/tbank_notify.log
   Если там появилась строка, значит NotificationURL работает.
