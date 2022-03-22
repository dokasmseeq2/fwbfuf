<?php

define ('MODO_DESENVOLVEDOR', false); // no modo desenvolvedor só os adiministradores podem usar o bot

// TOKEN DO BOT
define ('TOKEN_BOT', '1952362872:AAEPpcEX77Ab_3j6N7QX6ZGTjqTaas29h_8');

// API KEY https://sms-activate.ru/en/api2
define ('KEY_SMS', '178AeA7cA08502A10594260A66d2b46e');

// token do mercado pago
define ('ACCESS_TOKEN_MERCADO_PAGO', 'COLOCA O SEU');

// porcentagem de lucro sobre os valores cobrados no site, já feita a converção
define ('PORCENTAGEM_LUCRO', 110); // %

// lista de ids de adms
define ('ADMS', [1672379315]);

define ('CHAT_ID_NOTIFICACAO', '-1001672379315'); // onde irá as notificações de resgate de saldos (opcional)

define ('GRUPO_ID','-1001672379315'); // grupo de bot

// paises em que o bot vai atender,
// limitado a 160 paises por conta do telegram não suportar além disso
define ('PAISES', [
	'187' => '🇺🇸 EUA',
	'0' => '🇷🇺 Russia',
	'87' => '🇵🇾 Paraguai',
	'86' => '🇮🇹 Italia',
	'117' => '🇵🇹 Portugal',
	'73' => '🇧🇷 Brasil',
	'0' => '🇷🇺 Rússia',
	'1' => '🇺🇦 Ucrânia',
	'2' => '🇰🇿 Cazaquistão',
	'3' => '🇨🇳 China',
	'4' => '🇵🇭 Filipinas',
	'5' => '🇲🇲 Miamar',
	'6' => '🇮🇩 Indonésia',
	'7' => '🇲🇾 Malásia',
	'8' => '🇰🇪 Quênia',
	'9' => '🇹🇿 Tanzânia',
	'10' => '🇻🇳 Viatinã',
	'13' => '🇮🇱 Israel',
	'14' => '🇭🇰 Hong Kong',
	'15' => '🇵🇱 Polônia',
	'16' => '🇬🇧 Reino Unido',
	'19' => '🇳🇪 Nigéria',
	'21' => '🇪🇬 Egito',
	'22' => '🇮🇳 Índia',
	'23' => '🇮🇪 Irlanda',
	'24' => '🇰🇭 Camboja',
	'25' => '🇱🇦 Laus',
	'26' => '🇭🇹 Haiti',
	'28' => '🇬🇲 Gambia',
	'29' => '🇷🇸 Sérvia',
	'30' => '🏳️�1�7�🌄1�7 Iêmen',
	'31' => '🇿🇦 Africa do Sul',
	'32' => '🇷🇴 Romênia',
	'33' => '🇨🇴 Colômbia',
	'34' => '🇪🇪 Estônia',
	'35' => '🇦🇿 Azerbaijão',
	'36' => '🇨🇦 Canadá',
	'37' => '🇲🇦 Marrocos',
	'38' => '🇬🇭 Gana',
	'39' => '🇦🇷 Argentina',
	'40' => '🇺🇿 Uzbequistão',
	'41' => '🇨🇲 Camarões',
	'43' => '🇩🇪 Alemanha',
	'44' => '🇱🇹 lituânia',
	'45' => '🇭🇷 Croácia',
	'46' => '🇸🇪 Suécia',
	'47' => '🇮🇶 Iraque',
	'48' => '🇧🇶 Paises Baixos',
	'49' => '🇱🇻 Letônia',
	'50' => '🇦🇹 Austrália',
	'52' => '🇹🇭 Tailândia',
	'53' => '🇸🇦 Arábia Saudita',
	'54' => '🇲🇽 México',
	'55' => '🇹🇼 Taiwan',
	'56' => '🇪🇸 Espanha',
	'57' => '🇮🇷 Irã',
	'60' => '🇧🇩 Bangladesh',
	'61' => '🇸🇳 Senegal',
	'62' => '🇵🇪 Peru'
]);

/*

	Quando ativado esse sistema bloqueia por X minutos o usuario que cancelar mais de X números do mesmo serviço NO MESMO PAÍS durante as proximas 12h e remove X saldo do usuário em cada bloqueio.
	Para remover o bloqueio use /removeblock (id usuario)

*/
define ('ANTI_CANCELAMENTO', true); // ativa (true) ou desativa (false) sistema de verificação de abuso de cancelamento
define ('TEMPO_BLOCK', 1800); // meia hora 1800 segundos
define ('CANCELAMENTO_MINIMO', 3); // quantidae minima de cancelamentos DO MESMO SERVIÇO para bloquear um usuário
define ('VALOR_DESCONTO_BLOCK', 1); // valor descontado do saldo em cada bloqueio no bot

// SISTEMA DE BONÛS

// porcentagem bonus
define ('BONUS', 0); // 10%

define ('STATUS_BONUS_ADICAO', false); // status do sistema de bonus por sdicionar usuário
define ('BONUS_ADICAO', 0.50); // Bonus por adicionar usuario no nosso grupo, em reais
define ('MINIMO_ADICAO', 50); // Minimo de usuarios adicionados para ganhar bonus

// SISTEMA AFILIADOS

define ('STATUS_AFILIADO', true);
define ('BONUS_AFILIADO', 15); // 15% do valor de recarga do indicado
