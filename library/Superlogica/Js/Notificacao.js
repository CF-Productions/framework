var Superlogica_Js_Notificacao = new Class({
        
    /**
     * Tempo em milisegundos que a msg fica aberta
     * @var int
     */
    _tempoAberto : 5000,
    
    /**
     * Mensagem a ser exibida
     * @type {String}
     */
    _msg : "",

    /**
     * Tipo da mensagem
     * Dispon�veis: success, warning, info ou error
     * @type {String}
     */
    _tipo : "",

    /**
     * Tipo padr�o a ser utilizado caso n�o seja informado
     * @type {String}
     */
    _tipoPadrao :'success',
    
    /**
     * Url para o qual o ser� direcionado ao clicar no Alert
     */
    _urlRedirect :'',
    
    /**
     * Url para o qual o ser� direcionado ao clicar no Alert
     */
    _urlRedirectPadrao :'https://superlogica.net',
    
    /**
     * Icone do alerta
     */
    _icon :'',
    
    /**
     * Flag para limpar as notifica��es anteriores
     */
    _limparNotificacoesAnteriores :'',
    
    /**
     * Chamada ao instanciar o objeto
     */
    initialize : function( msg,tipo,urlRedirect,icon, tempoNotificacao, limparNotificacoesAnteriores){        
        
        toastr.options = {
            closeButton: true,
            positionClass: "toast-bottom-right",
            timeOut: tempoNotificacao ? tempoNotificacao : this._tempoAberto
        };
        
        if ( limparNotificacoesAnteriores )
            Superlogica_Js_Notificacao.limpar();
        
        this.setMsg( msg );
        this.setTipo( tipo );
        this.setUrl( urlRedirect );
        this.setIcon( icon );
    },
    
    /**
     * Seta a msg da notifica��o
     * @param string msg
     */
    setMsg : function( msg ){
        this._msg = msg ? msg : "";
    },

    /**
     * Retorna a msg da notifica��o
     * @return string
     */
    getMsg : function(){
        return this._msg;
    },

    /**
     * Seta qual tipo a ser utilizado na notifica��o
     * @param {String} tipo Dispon�vel: success (padr�o), warning, info, error
     */
    setTipo : function(tipo){
        this._tipo = tipo;
    },

    /**
     * Retorna qual o tipo da notifica��o
     * @return {String}
     */
    getTipo : function(){
        return this._tipo ? this._tipo : this._tipoPadrao;
    },
    
    /**
     * Seta qual url ser� direcionado ao clicar na notifica��o
     * @param {String} tipo Dispon�vel: success (padr�o), warning, info, error
     */
    setUrl : function(url){
        this._urlRedirect = url;
    },

    /**
     * Retorna qual a url ser� direcionado ao clicar na notifica��o
     * @return {String}
     */
    getUrl : function(){
        return this._urlRedirect ? this._urlRedirect : this._urlRedirectPadrao;
    },
    
    
    /**
     * Seta qual url ser� direcionado ao clicar na notifica��o
     * @param {String} tipo Dispon�vel: success (padr�o), warning, info, error
     */
    setIcon : function(icon){
        this._icon = icon;
    },

    /**
     * Retorna qual a url ser� direcionado ao clicar na notifica��o
     * @return {String}
     */
    getIcon : function(){
        return this._icon ? this._icon : this._icon;
    },
        
    /**
     * Fun��o chamada para mostrar o box
     * 
     * @param string msg
     */
    show : function(){
        var tipo = this.getTipo();
        var msg = this.getMsg();
        toastr[tipo](msg);
    },

    showDesktop : function () {
        Notification.requestPermission(function () {
            var notification = new Notification(
                    "Processo finalizado", {
                        icon: this.getIcon(),
                        body: this.getMsg()
                    });
            notification.onclick = function () {
                window.open(this.getUrl());
            }
        });
    } 
});

Superlogica_Js_Notificacao.limpar = function(){
    
    var notificacoes = new Superlogica_Js_Elemento('.toast');
    if ( notificacoes ){
        notificacoes.emCadaElemento(function(){
            var notificacao = new Superlogica_Js_Elemento( this ) 
            notificacao.esconder();
        });
    }
};
