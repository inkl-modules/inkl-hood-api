<?php

namespace Inkl\HoodApi\Service;

use Inkl\HoodApi\Client;
use Inkl\HoodApi\Item\Auction;

class AuctionService
{

    /** @var Client */
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @param Auction[] $auctions
     */
    public function validate(array $auctions)
    {
        return $this->baseRequest('auctionValidate', $auctions);
    }

    /**
     * @param Auction[] $auctions
     */
    public function insert(array $auctions)
    {
        return $this->baseRequest('auctionInsert', $auctions);
    }

    /**
     * @param Auction[] $auctions
     */
    public function update(array $auctions)
    {
        return $this->baseRequest('auctionUpdate', $auctions);
    }

    /**
     * @param Auction[] $auctions
     */
    public function delete(array $auctions)
    {
        return $this->baseRequest('auctionDelete', $auctions);
    }

    private function baseRequest($method, array $auctions)
    {
        $dom = new \DOMDocument();

        $auctionsElement = $dom->createElement('auctions');
        $dom->appendChild($auctionsElement);

        foreach ($auctions as $auction)
        {
            $auctionElement = $auction->getDom()->getElementsByTagName('auction')->item(0);
            $auctionsElement->appendChild($dom->importNode($auctionElement, true));
        }

        return $this->client->request($method, $dom);
    }

}