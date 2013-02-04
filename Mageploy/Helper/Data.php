<?php
/**
 * Description of Data
 *
 * @author Alessandro Ronchi <aronchi at webgriffe.com>
 */
class PugMoRe_Mageploy_Helper_Data extends Mage_Core_Helper_Abstract {
    
    public function getStoragePath() {
        return Mage::getBaseDir().DS.'var'.DS.'log'.DS;
    }
    
    public function getExecutedActionsFilename() {
        return 'mageploy_executed.csv';
    }
    
    public function getAllActionsFilename() {
        return 'mageploy_all.csv';
    }
    
    public function getAttributeIdFromCode($attributeCode) {
        $attributeInfo = Mage::getResourceModel('eav/entity_attribute_collection')
                ->setCodeFilter($attributeCode)
                ->getFirstItem();
        return $attributeInfo->getId();
    }
    
}
