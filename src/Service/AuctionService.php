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
    public function insert(array $auctions)
    {
        $dom = new \DOMDocument();

        $auctionsElement = $dom->createElement('auctions');
        $dom->appendChild($auctionsElement);

        foreach ($auctions as $auction)
        {
            $auctionElement = $auction->getDom()->getElementsByTagName('auction')->item(0);
            $auctionsElement->appendChild($dom->importNode($auctionElement, true));
        }

        return $this->client->request('auctionValidate', $dom);
    }

}