/**
 * Internationalization: Brazilian Portugese language
 * 
 * Depends on jWYSIWYG, $.wysiwyg.i18n
 *
 * By: Marcelo Wergles <mwergles@gmail.com>
 *
 */
(function ($) {
	if (undefined === $.wysiwyg) {
		throw "lang.pt_br.js depends on $.wysiwyg";
	}
	if (undefined === $.wysiwyg.i18n) {
		throw "lang.pt_br.js depends on $.wysiwyg.i18n";
	}

	$.wysiwyg.i18n.lang.pt_br = {
		controls: {
			"Bold": "Negrito",
			"Colorpicker": "Escolher uma cor",
			"Copy": "Copiar",
			"Create link": "Criar link",
			"Cut": "Recortar",
			"Decrease font size": "Diminuir o tamanho da fonte",
			"Fullscreen": "Tela cheia",
			"Header 1": "T�tulo 1",
			"Header 2": "T�tulo 2",
			"Header 3": "T�tulo 3",
			"View source code": "Ver c�digo fonte",
			"Increase font size": "Aumentar o tamanho da fonte",
			"Indent": "Aumentar recuo",
			"Insert Horizontal Rule": "Inserir linha horizontal",
			"Insert image": "Inserir imagem",
			"Insert Ordered List": "Inserir numera��o",
			"Insert table": "Inserir tabela",
			"Insert Unordered List": "Inserir marcadores",
			"Italic": "It�lico",
			"Justify Center": "Centralizar",
			"Justify Full": "Justificar",
			"Justify Left": "Alinhar � esquerda",
			"Justify Right": "Alinhar � direita",
			"Left to Right": "Esquerda � direita",
			"Outdent": "Diminuir recuo",
			"Paste": "Colar",
			"Redo": "Refazer",
			"Remove formatting": "Remover formata��o",
			"Right to Left": "Direita � esquerda",
			"Strike-through": "Riscar",
			"Subscript": "Subscrito",
			"Superscript": "Sobrescrito",
			"Underline": "Sublinhar",
			"Undo": "Desfazer"
		},

		dialogs: {
			// for all
			"Apply": "Aplicar",
			"Cancel": "Cancelar",

			colorpicker: {
				"Colorpicker": "Escolher uma cor",
				"Color": "Cor"
			},

			image: {
				"Insert Image": "Inserir Imagem",
				"Preview": "Pr�-visualizar",
				"URL": "URL",
				"Title": "T�tulo",
				"Description": "Descri��o",
				"Width": "Largura",
				"Height": "Altura",
				"Original W x H": "L x A original",
				"Float": "",
				"None": "",
				"Left": "",
				"Right": ""
			},

			link: {
				"Insert Link": "Inserir Link",
				"Link URL": "URL do link",
				"Link Title": "T�tulo do link",
				"Link Target": "Alvo do link"
			},

			table: {
				"Insert table": "Inserir tabela",
				"Count of columns": "N�mero de colunas",
				"Count of rows": "N�mero de linhas"
			}
		}
	};
})(jQuery);
