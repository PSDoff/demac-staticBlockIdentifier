<?php

class Demac_CmsBlock_Model_Observer {

    public function cmsBlockBlockToHtmlAfter($observer) {
        $block = $observer->getBlock();
        if ($block instanceof Mage_Cms_Block_Block) {
            //Do logic here
            $transport = $observer->getTransport();
            $blockId = $block->getBlockId();

            $html = '<!-- BEGIN STATIC BLOCK: ' . $blockId . '-->';
            $html .= $transport->getHtml();
            $html .= '<!-- END STATIC BLOCK: ' . $blockId . '-->';

            $transport->setHtml($html);
        }
    }
}