<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Helpers_AtualizarSkm {
    
     /**
     * Executa antes de atualizar o skm para vers�o X
     * Caso de algum erro durante esse processo o skm � interompido 
     * e n�o � atualizado para a vers�o
     */
    public function antesAtualizarVersao6() {
    }
    
    /**
     * Executa ao atualizar o skm para vers�o X
     * Script executado depois que a versao X foi processada
     * caso de algum erro e o skm rodado for um CREATE,DROP,ALTER
     * n�o da roolback.
     * O skm � interrompido e n�o � atualizado para vers�o X;
     */
    public function aoAtualizarVersao6() {

    }
    public function aoAtualizarVersao7() {

    }
    public function aoAtualizarVersao8() {

    }

}

