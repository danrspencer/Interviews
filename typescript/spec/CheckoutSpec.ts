///<reference path='../jasmine.d.ts' />
///<reference path='../jasmine_sss.ts' />

import Checkout = require('src/Checkout');

// The Checkout Kata
//
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


describe('Checkout', () => {

  var checkout;

  beforeEach(() => {
    checkout = new Checkout();
  });

  it('returns 0 with no products', () => {
    expect(checkout.price('')).toEqual(0);
  });

//  it('returns the price of a given product', () => {
//    expect(checkout.price('A')).toEqual(50);
//  });

//  it('returns the price of two products', () => {
//    expect(checkout.price('AB')).toEqual(80);
//  });

//  it('returns the price of a list of products', () => {
//    expect(checkout.price('ABCD')).toEqual(115);
//  });

//  it('returns the offer price when the offer quantity for a product is matched', () => {
//    expect(checkout.price('AAA')).toEqual(130);
//    expect(checkout.price('BB')).toEqual(45);
//  });

//  it('can handle multiple offer products', () => {
//    expect(checkout.price('AAABB')).toEqual(175);
//  });

//  it('can handle the same offer multiple times', () => {
//    expect(checkout.price('AAAAAA')).toEqual(260);
//  });

//  it('can handle offers for multiple items non-contiguously', () => {
//    expect(checkout.price('ACADA')).toEqual(165);
//  });

//  it('can handle a complex list of items in any order', () => {
//
//    // AAA,AAA,A
//    // BB,BB
//    // CCC
//    // DDD
//    expect(checkout.price('ABCDAADBCADCABBAA')).toEqual(2*130 + 50 + 2*45 + 3*20 + 3*15);
//  });

});