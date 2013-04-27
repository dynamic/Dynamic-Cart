## Overview

 Silverstripe module for a simple shopping cart. All back office managed by PayPal. Requires PayPal Mini Cart Module.

## Installation ##

 * cd ~/Sites/yourSilverStripeProject/
 * git clone git@github.com:dynamic/Dynamic-Cart.git products
 * Run `/dev/build`

## Requirements ##

 *  SilverStripe 3.0+
 *  SilverStripe MiniCart Module by ryanwachtl for checkout with paypal - https://github.com/ryanwachtl/silverstripe-minicart
 
## Use ##

 Create a Product page in the CMS. Products can also be grouped into categories by creating a Product Category page and placing your Products as subpages.
 
 If the SilverStripe MiniCart is installed and configured, "Add to Cart" buttons will display on the Product page. Hitting Checkout in the cart will submit the shopping cart contents to PayPal for processing.

## Maintainer Contact ##

 *  Dynamic (<info@dynamicdoes.com>)

## Links ##

 * [SilverStripe MiniCart](https://github.com/ryanwachtl/silverstripe-minicart) by Ryan Wachtl
 * [SilverStripe CMS](http://www.silverstripe.org/)

## License ##

	Copyright (c) 2013, Dynamic Inc
	All rights reserved.

	Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

	Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
	
	Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.
	
	THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.