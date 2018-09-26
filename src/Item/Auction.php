<?php

namespace Inkl\HoodApi\Item;

class Auction
{

    private $auctionMode = 'shopProduct';
    private $categoryId;
    private $auctionName;
    private $quantity;
    private $condition = 'neu';
    private $description;

    private $payOptions = [];

    private $shipMethods = [];
    private $shippingDiscount;

    private $startDate;
    private $startTime;
    private $durationInDays;
    private $autoRenew = 0;

    private $priceStart;
    private $priceBuyNow;
    private $salesTax;

    private $category2Id;
    private $auctionNameSubTitle;
    private $featureBoldTitle = 0;
    private $featureBackGroundColor = 0;
    private $featureGallery = 0;
    private $featureCategory = 0;
    private $featureHomePage = 0;
    private $featureHomePageImage = 0;
    private $featureXXLImage = 0;
    private $featureNoAds = 0;

    private $prodCatId;
    private $prodCatId2;
    private $prodCatId3;
    private $shortDesc;
    private $ifIsSoldOut = 'hide';
    private $isApproved;
    private $showOnStartPage = 0;
    private $useSubtitleForAuction = 0;
    private $listPrice;

    private $itemNumber;
    private $itemNumberUniqueFlag = 1;
    private $ean;
    private $mpn;
    private $manufacturer;

    private $images = [];

    /**
     * @return mixed
     */
    public function getAuctionMode()
    {
        return $this->auctionMode;
    }

    /**
     * @param mixed $auctionMode
     * @return $this
     */
    public function setAuctionMode($auctionMode)
    {
        $this->auctionMode = $auctionMode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @param mixed $categoryId
     * @return $this
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAuctionName()
    {
        return $this->auctionName;
    }

    /**
     * @param mixed $auctionName
     * @return $this
     */
    public function setAuctionName($auctionName)
    {
        $this->auctionName = $auctionName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * @param mixed $condition
     * @return $this
     */
    public function setCondition($condition)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return array
     */
    public function getPayOptions(): array
    {
        return $this->payOptions;
    }

    /**
     * @param array $payOptions
     * @return $this
     */
    public function setPayOptions($payOptions)
    {
        $this->payOptions = $payOptions;
        return $this;
    }

    /**
     * @return array
     */
    public function getShipMethods(): array
    {
        return $this->shipMethods;
    }

    /**
     * @param array $shipmethods
     * @return $this
     */
    public function setShipMethods($shipMethods)
    {
        $this->shipMethods = $shipMethods;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShippingDiscount()
    {
        return $this->shippingDiscount;
    }

    /**
     * @param mixed $shippingDiscount
     * @return $this
     */
    public function setShippingDiscount($shippingDiscount)
    {
        $this->shippingDiscount = $shippingDiscount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param mixed $startDate
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param mixed $startTime
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDurationInDays()
    {
        return $this->durationInDays;
    }

    /**
     * @param mixed $durationInDays
     * @return $this
     */
    public function setDurationInDays($durationInDays)
    {
        $this->durationInDays = $durationInDays;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAutoRenew()
    {
        return $this->autoRenew;
    }

    /**
     * @param mixed $autoRenew
     * @return $this
     */
    public function setAutoRenew($autoRenew)
    {
        $this->autoRenew = $autoRenew;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPriceStart()
    {
        return $this->priceStart;
    }

    /**
     * @param mixed $priceStart
     * @return $this
     */
    public function setPriceStart($priceStart)
    {
        $this->priceStart = $priceStart;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPriceBuyNow()
    {
        return $this->priceBuyNow;
    }

    /**
     * @param mixed $priceBuyNow
     * @return $this
     */
    public function setPriceBuyNow($priceBuyNow)
    {
        $this->priceBuyNow = $priceBuyNow;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSalesTax()
    {
        return $this->salesTax;
    }

    /**
     * @param mixed $salesTax
     * @return $this
     */
    public function setSalesTax($salesTax)
    {
        $this->salesTax = $salesTax;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCategory2Id()
    {
        return $this->category2Id;
    }

    /**
     * @param mixed $category2Id
     * @return $this
     */
    public function setCategory2Id($category2Id)
    {
        $this->category2Id = $category2Id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAuctionNameSubTitle()
    {
        return $this->auctionNameSubTitle;
    }

    /**
     * @param mixed $auctionNameSubTitle
     * @return $this
     */
    public function setAuctionNameSubTitle($auctionNameSubTitle)
    {
        $this->auctionNameSubTitle = $auctionNameSubTitle;
        return $this;
    }

    /**
     * @return int
     */
    public function getFeatureBoldTitle(): int
    {
        return $this->featureBoldTitle;
    }

    /**
     * @param int $featureBoldTitle
     * @return $this
     */
    public function setFeatureBoldTitle($featureBoldTitle)
    {
        $this->featureBoldTitle = $featureBoldTitle;
        return $this;
    }

    /**
     * @return int
     */
    public function getFeatureBackGroundColor(): int
    {
        return $this->featureBackGroundColor;
    }

    /**
     * @param int $featureBackGroundColor
     * @return $this
     */
    public function setFeatureBackGroundColor($featureBackGroundColor)
    {
        $this->featureBackGroundColor = $featureBackGroundColor;
        return $this;
    }

    /**
     * @return int
     */
    public function getFeatureGallery(): int
    {
        return $this->featureGallery;
    }

    /**
     * @param int $featureGallery
     * @return $this
     */
    public function setFeatureGallery($featureGallery)
    {
        $this->featureGallery = $featureGallery;
        return $this;
    }

    /**
     * @return int
     */
    public function getFeatureCategory(): int
    {
        return $this->featureCategory;
    }

    /**
     * @param int $featureCategory
     * @return $this
     */
    public function setFeatureCategory($featureCategory)
    {
        $this->featureCategory = $featureCategory;
        return $this;
    }

    /**
     * @return int
     */
    public function getFeatureHomePage(): int
    {
        return $this->featureHomePage;
    }

    /**
     * @param int $featureHomePage
     * @return $this
     */
    public function setFeatureHomePage($featureHomePage)
    {
        $this->featureHomePage = $featureHomePage;
        return $this;
    }

    /**
     * @return int
     */
    public function getFeatureHomePageImage(): int
    {
        return $this->featureHomePageImage;
    }

    /**
     * @param int $featureHomePageImage
     * @return $this
     */
    public function setFeatureHomePageImage($featureHomePageImage)
    {
        $this->featureHomePageImage = $featureHomePageImage;
        return $this;
    }

    /**
     * @return int
     */
    public function getFeatureXXLImage(): int
    {
        return $this->featureXXLImage;
    }

    /**
     * @param int $featureXXLImage
     * @return $this
     */
    public function setFeatureXXLImage($featureXXLImage)
    {
        $this->featureXXLImage = $featureXXLImage;
        return $this;
    }

    /**
     * @return int
     */
    public function getFeatureNoAds(): int
    {
        return $this->featureNoAds;
    }

    /**
     * @param int $featureNoAds
     * @return $this
     */
    public function setFeatureNoAds($featureNoAds)
    {
        $this->featureNoAds = $featureNoAds;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProdCatId()
    {
        return $this->prodCatId;
    }

    /**
     * @param mixed $prodCatId
     * @return $this
     */
    public function setProdCatId($prodCatId)
    {
        $this->prodCatId = $prodCatId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProdCatId2()
    {
        return $this->prodCatId2;
    }

    /**
     * @param mixed $prodCatId2
     * @return $this
     */
    public function setProdCatId2($prodCatId2)
    {
        $this->prodCatId2 = $prodCatId2;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProdCatId3()
    {
        return $this->prodCatId3;
    }

    /**
     * @param mixed $prodCatId3
     * @return $this
     */
    public function setProdCatId3($prodCatId3)
    {
        $this->prodCatId3 = $prodCatId3;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShortDesc()
    {
        return $this->shortDesc;
    }

    /**
     * @param mixed $shortDesc
     * @return $this
     */
    public function setShortDesc($shortDesc)
    {
        $this->shortDesc = $shortDesc;
        return $this;
    }

    /**
     * @return string
     */
    public function getIfIsSoldOut(): string
    {
        return $this->ifIsSoldOut;
    }

    /**
     * @param string $ifIsSoldOut
     * @return $this
     */
    public function setIfIsSoldOut($ifIsSoldOut)
    {
        $this->ifIsSoldOut = $ifIsSoldOut;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsApproved()
    {
        return $this->isApproved;
    }

    /**
     * @param mixed $isApproved
     * @return $this
     */
    public function setIsApproved($isApproved)
    {
        $this->isApproved = $isApproved;
        return $this;
    }

    /**
     * @return int
     */
    public function getShowOnStartPage(): int
    {
        return $this->showOnStartPage;
    }

    /**
     * @param int $showOnStartPage
     * @return $this
     */
    public function setShowOnStartPage($showOnStartPage)
    {
        $this->showOnStartPage = $showOnStartPage;
        return $this;
    }

    /**
     * @return int
     */
    public function getUseSubtitleForAuction(): int
    {
        return $this->useSubtitleForAuction;
    }

    /**
     * @param int $useSubtitleForAuction
     * @return $this
     */
    public function setUseSubtitleForAuction($useSubtitleForAuction)
    {
        $this->useSubtitleForAuction = $useSubtitleForAuction;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getListPrice()
    {
        return $this->listPrice;
    }

    /**
     * @param mixed $listPrice
     * @return $this
     */
    public function setListPrice($listPrice)
    {
        $this->listPrice = $listPrice;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getItemNumber()
    {
        return $this->itemNumber;
    }

    /**
     * @param mixed $itemNumber
     * @return $this
     */
    public function setItemNumber($itemNumber)
    {
        $this->itemNumber = $itemNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemNumberUniqueFlag(): int
    {
        return $this->itemNumberUniqueFlag;
    }

    /**
     * @param int $itemNumberUniqueFlag
     * @return $this
     */
    public function setItemNumberUniqueFlag($itemNumberUniqueFlag)
    {
        $this->itemNumberUniqueFlag = $itemNumberUniqueFlag;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEan()
    {
        return $this->ean;
    }

    /**
     * @param mixed $ean
     * @return $this
     */
    public function setEan($ean)
    {
        $this->ean = $ean;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMpn()
    {
        return $this->mpn;
    }

    /**
     * @param mixed $mpn
     * @return $this
     */
    public function setMpn($mpn)
    {
        $this->mpn = $mpn;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * @param mixed $manufacturer
     * @return $this
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * @return array
     */
    public function getImages(): array
    {
        return $this->images;
    }

    /**
     * @param array $images
     * @return $this
     */
    public function setImages($images)
    {
        $this->images = $images;
        return $this;
    }

    public function getDom()
    {
        $dom = new \DOMDocument('1.0', 'UTF-8');
        $dom->preserveWhiteSpace = false;
        $dom->formatOutput = true;

        $auctionElement = $dom->createElement('auction');
        $dom->appendChild($auctionElement);

        $auctionElement->appendChild($dom->createElement('auctionMode', $this->getAuctionMode()));
        $auctionElement->appendChild($dom->createElement('categoryID', $this->getCategoryId()));
        $auctionElement->appendChild($dom->createElement('auctionName', $this->getAuctionName()));
        $auctionElement->appendChild($dom->createElement('quantity', $this->getQuantity()));
        $auctionElement->appendChild($dom->createElement('condition', $this->getCondition()));
        $auctionElement->appendChild($dom->createElement('description', $this->getDescription()));

        $payOptionsElement = $dom->createElement('payOptions');
        $auctionElement->appendChild($payOptionsElement);
        foreach ($this->getPayOptions() as $payOption)
        {
            $payOptionsElement->appendChild($dom->createElement('option', $payOption));
        }

        $shipMethodsElement = $dom->createElement('shipmethods');
        $auctionElement->appendChild($shipMethodsElement);
        foreach ($this->getShipMethods() as $name => $price)
        {
            $shipMethodElement = $dom->createElement('shipmethod');
            $shipMethodElement->setAttribute('name', $name);

            $shipMethodElement->appendChild($dom->createElement('value', $price));

            $shipMethodsElement->appendChild($shipMethodElement);
        }
        $auctionElement->appendChild($dom->createElement('shippingDiscount', $this->getShippingDiscount()));

        $auctionElement->appendChild($dom->createElement('startDate', $this->getStartDate()));
        $auctionElement->appendChild($dom->createElement('startTime', $this->getStartTime()));
        $auctionElement->appendChild($dom->createElement('durationInDays', $this->getDurationInDays()));
        $auctionElement->appendChild($dom->createElement('autoRenew', $this->getAutoRenew()));

        $auctionElement->appendChild($dom->createElement('priceStart', $this->getPriceStart()));
        $auctionElement->appendChild($dom->createElement('priceBuyNow', $this->getPriceBuyNow()));
        $auctionElement->appendChild($dom->createElement('salesTax', $this->getSalesTax()));

        $auctionElement->appendChild($dom->createElement('category2ID', $this->getCategory2Id()));
        $auctionElement->appendChild($dom->createElement('auctionNameSubTitle', $this->getAuctionNameSubTitle()));
        $auctionElement->appendChild($dom->createElement('featureBoldTitle', $this->getFeatureBoldTitle()));
        $auctionElement->appendChild($dom->createElement('featureBackGroundColor', $this->getFeatureBackGroundColor()));
        $auctionElement->appendChild($dom->createElement('featureGallery', $this->getFeatureGallery()));
        $auctionElement->appendChild($dom->createElement('featureCategory', $this->getFeatureCategory()));
        $auctionElement->appendChild($dom->createElement('featureHomePage', $this->getFeatureHomePage()));
        $auctionElement->appendChild($dom->createElement('featureHomePageImage', $this->getFeatureHomePageImage()));
        $auctionElement->appendChild($dom->createElement('featureXXLImage', $this->getFeatureXXLImage()));
        $auctionElement->appendChild($dom->createElement('featureNoAds', $this->getFeatureNoAds()));

        $auctionElement->appendChild($dom->createElement('prodCatID', $this->getProdCatId()));
        $auctionElement->appendChild($dom->createElement('prodCatID2', $this->getProdCatId2()));
        $auctionElement->appendChild($dom->createElement('prodCatID3', $this->getProdCatId3()));
        $auctionElement->appendChild($dom->createElement('shortDesc', $this->getShortDesc()));
        $auctionElement->appendChild($dom->createElement('ifIsSoldOut', $this->getIfIsSoldOut()));
        $auctionElement->appendChild($dom->createElement('isApproved', $this->getIsApproved()));
        $auctionElement->appendChild($dom->createElement('showOnStartPage', $this->getIsApproved()));
        $auctionElement->appendChild($dom->createElement('useSubtitleForAuction', $this->getUseSubtitleForAuction()));
        $auctionElement->appendChild($dom->createElement('listPrice', $this->getListPrice()));

        $auctionElement->appendChild($dom->createElement('itemNumber', $this->getItemNumber()));
        $auctionElement->appendChild($dom->createElement('itemNumberUniqueFlag', $this->getItemNumberUniqueFlag()));
        $auctionElement->appendChild($dom->createElement('ean', $this->getEan()));
        $auctionElement->appendChild($dom->createElement('mpn', $this->getMpn()));
        $auctionElement->appendChild($dom->createElement('manufacturer', $this->getManufacturer()));

        $imagesElement = $dom->createElement('images');
        $auctionElement->appendChild($imagesElement);
        $imagesElement->appendChild($dom->createElement('imageURL', current($this->getImages())));

        return $dom;
    }

}