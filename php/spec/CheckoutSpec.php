<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

// The Checkout Kata
//
// We’re going to see how far we can get in implementing a supermarket checkout that calculates the total price of a number of items.
// In a normal supermarket, things are identified using Stock Keeping Units, or SKUs. In our store, we’ll use individual letters of
// the alphabet (A, B, C, and so on). Our goods are priced individually.
// In addition, some items are multipriced: buy n of them, and they’ll cost you y pounds. For example, item ‘A’ might cost 50 pounds
// individually, but this week we have a special offer: buy three ‘A’s and they’ll cost you 130. The price and offer table:
//
//   Item  Price   Offer
// --------------------------
//   A     50       3 for 130
//   B     30       2 for 45
//   C     20
//   D     15
//
// Our checkout accepts items in any order, so that if we scan a B, an A, and another B, we’ll recognize the two B’s and price
// them at 45 (for a total price so far of 95).


class CheckoutSpec extends ObjectBehavior
{
    function it_returns_0_with_no_products()
    {
        $this->price('')->shouldReturn(0);
    }

//    function it_returns_the_price_of_a_given_product() {
//        $this->price('A')->shouldReturn(50);
//    }
//
//    function it_returns_the_price_of_two_products() {
//        $this->price('AB')->shouldReturn(80);
//    }
//
//    function it_returns_the_price_of_a_list_of_products() {
//        $this->price('ABCD')->shouldReturn(115);
//    }
//
//    function it_returns_the_offer_price_when_the_offer_quantity_for_a_product_is_matched() {
//        $this->price('AAA')->shouldReturn(130);
//        $this->price('BB')->shouldReturn(45);
//    }
//
//    function it_can_handle_multiple_offer_products() {
//        $this->price('AAABB')->shouldReturn(175);
//    }
//
//    function it_can_handle_the_same_offer_multiple_times() {
//        $this->price('AAAAAA')->shouldReturn(260);
//    }
//
//    function it_can_handle_offers_for_multiple_items_non_contiguously() {
//        $this->price('ACADA')->shouldReturn(165);
//    }
//
//    function it_can_handle_a_complex_list_of_items_in_any_order() {
//
//        // AAA,AAA,A
//        // BB,BB
//        // CCC
//        // DDD
//        $this->price('ABCDAADBCADCABBAA')->shouldReturn(2*130 + 50 + 2*45 + 3*20 + 3*15);
//    }
}
