<?php
/**
 * Arquivo que cont�m as tradu��es das mensagens de erro do formul�rio para pt_BR
 */
$portugues = array(
        // Campo vazio
        'isEmpty' => 'Este campo n�o pode ser vazio',
        // AlNum 
        'alnumNotAlnum' => '"%value%" cont�m caracteres n�o alfab�ticos ou digitos.',
        // Alpha
        'alphaNotAlpha' => '"%value%" cont�m caracteres n�o alfab�ticos.',
        // Barcode_Ean13        
        'barcode_Ean13Invalid' => '"%value%" n�o � um c�digo de barras EAN-13 v�lido.',
        'barcode_Ean13InvalidLength' => '"%value%" deve conter 13 caracteres.',
        'barcode_Ean13NotNumeric' => '"%value%" s� pode conter n�meros.',
        // Barcode_UpcA
        'barcode_UpcAInvalid' => '"%value%" n�o � um c�digo de barras UPC-A v�lido',
        'barcode_UpcAInvalidLength' => '"%value%" deve conter 12 caracteres.',
        // Between
        'betweenNotBetween' => '"%value%" n�o est� entre "%min%" e "%max%", inclusive.',
        'betweenNotBetweenStrict' => '"%value%" n�o est� entre "%min%" e "%max%" ',
        // Captcha
        'missingValue' => 'Valor do captcha vazio.',
        'missingId' => 'Campo ID do captcha est� vazio.',
        'badCaptcha' => 'Valor do captcha incorreto.',
        // Ccnum
        'ccnumLength' => '"%value%" deve conter enter 13 e 19 digitos.',
        'ccnumChecksum' => 'Algor�timo de Luhn (mod-10 checksum) falhou em "%value%".',
        // Date         
        'dateFalseFormat' => '"%value%" n�o est� no formato necess�rio. DD/MM/AAAA',
        'dateInvalidDate' => '"%value%" n�o � uma data v�lida.',
        'dateNotYYYY-MM-DD' => '"%value%" n�o � uma data no formato AAAA-MM-DD.',
        // DbAbstract
        'dbAbstractErrorNoRecordFound' => 'N�o foram localizados registros que iguais a "%value%".',
        'dbAbstractErrorRecordFound' => 'Foi localizado valor igual a "%value%".',
        // Digits       
        'digitsNotDigits' => '"%value%" n�o cont�m somente d�gitos.',
        'digitsStringEmpty' => '"%value%" � um valor vazio.',
        // EmailAdress
        'emailAddressInvalidFormat' => '"%value%" n�o � um e-mail v�lido no formato nome@servidor.',
        'emailAddressInvalid' => '"%value%"  n�o � um e-mail v�lido no formato b�sico nome@servidor.',
        'emailAddressInvalidHostname' => '"%hostname%" n�o � um servidor v�lido para o e-mail "%value%".',
        'emailAddressInvalidMxRecord' => '"%hostname%" n�o aparenta ter um valor MX v�lido para o e-mail "%value%".',
        'emailAddressDotAtom' => '"%localPart%" n�o confere com formato dot-atom.',
        'emailAddressQuotedString' => '"%localPart%" n�o confere com o formato quoted-string.',
        'emailAddressInvalidLocalPart' => '"%localPart%" n�o � um nome v�lido para o e-mail "%value%".',
        'emailAddressLengthExceeded' => '"%value%" excede o tamanho limite.',
        // FileCount
        'fileCountTooMuch' => 'Muitos arquivos, m�ximo "%max%" s�o permitidos, mas "%count%" foram enviados.',
        'fileCountTooLess' => 'Poucos arquivos, m�nimo "%min%" s�o esperados, mas "%count%" foram enviados.',
        // Float
        'floatNotFloat' => '""%value%"" n�o � um valor decimal v�lido.',
        'floatInvalid' => 'Tipo inv�lido.',
        // HostName
        'hostnameInvalid' => 'Tipo inv�lido, valor deve ser um texto.',
        'hostnameIpAddressNotAllowed' => '"%value%" aparenta ser um endere�o IP, que n�o s�o permitidos.',
        'hostnameUnknownTld' => '"%value%" � um DNS desconhecido do modelo TLD.',
        'hostnameDashCharacter' => '"%value%" cont�m (-) em uma posi��o inv�lida.',
        'hostnameInvalidHostnameSchema' => '"%value%" n�o confere com o modelo TLD "%tld%"',
        'hostnameUndecipherableTld' => '"%value%" n�o tem um nome de servidor que pode ser extra�do para o TLD.',
        'hostnameInvalidHostname' => '"%value%" n�o tem a estrutura esperada para o nome de um servidor.',
        'hostnameInvalidLocalName' => '"%value%" n�o � um nome de servidor local v�lido.',
        'hostnameLocalNameNotAllowed' => '"%value%" � um servidor local, mas n�o s�o permitidos servidores locais.',
        'hostnameCannotDecodePunycode' => '"%value%" n�o tem um c�digo interpret�vel.',
        // InArray      
        'inArrayNotInArray' => '""%value%"" n�o foi encontrado nos valores permitidos.',
        // Int
        'notInt' => "'%value%' n�o � um valor v�lido.",
        'stringLengthTooLong' => "N�o pode ser maior que %max% caracteres"
);

return $portugues;