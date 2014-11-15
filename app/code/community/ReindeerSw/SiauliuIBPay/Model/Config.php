<?php
/**
 * @copyright Copyright (c) 2014 Reindeer Software (http://reindeersw.com)
 */
class ReindeerSw_SiauliuIBPay_Model_Config {
    
    /**
     * 
     * @return boolean
     */
    public function getEnabled() {
        return Mage::getStoreConfig('payment/reindeersw_siauliuibpay/active');
    }
    
    /**
     * 
     * @return string
     */
    public function getSubmitUrl() {
        return Mage::getStoreConfig('payment/reindeersw_siauliuibpay/submit_url');
    }
    
    /**
     * 
     * @return integer
     */
    public function getVkSndID() {
        return Mage::getStoreConfig('payment/reindeersw_siauliuibpay/vk_snd_id');
    }
    
    /**
     * 
     * @return string
     */
    public function getClientPrivateKey() {
        return Mage::getStoreConfig('payment/reindeersw_siauliuibpay/client_private_key');
    }
    
    /**
     * 
     * @return string
     */
    public function getClientKeyPassphrase() {
        return Mage::getStoreConfig('payment/reindeersw_siauliuibpay/client_key_passphrase');
    }
    
    /**
     * 
     * @return string
     */
    public function getBankPublicKey() {
        return Mage::getStoreConfig('payment/reindeersw_siauliuibpay/bank_public_key');
    }
}