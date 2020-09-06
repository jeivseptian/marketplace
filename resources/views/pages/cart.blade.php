@extends('layouts.app')

@section('title')
    Store Cart Page
@endsection

@section('content')
<div class="page-content page-cart">
      <section
        class="store-breadcrumbs"
        data-aos="fade-down"
        data-aos-delay="100"
      >
        <div class="container">
          <div class="row">
            <div class="col-12">
              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item active">
                    <a href="/index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item">
                    Cart
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>

      <section class="store-cart">
        <div class="container">
          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-12 table-responsive">
              <table class="table table-borderless table-cart">
                <thead>
                  <tr>
                    <td>Image</td>
                    <td>Name &amp; Seller</td>
                    <td>Price</td>
                    <td>Menu</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="width: 25%;">
                      <img
                        src="/images/product-details-1.jpg"
                        alt=""
                        class="cart-image w-100"
                      />
                    </td>
                    <td style="width: 35%;">
                      <div class="product-title">Sofa</div>
                      <div class="product-subtitle">By Laras</div>
                    </td>
                    <td style="width: 35%;">
                      <div class="product-title">$29.99</div>
                      <div class="product-subtitle">USD</div>
                    </td>
                    <td style="width: 20%;">
                      <a href="#" class="btn btn-remove-cart">Remove</a>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 25%;">
                      <img
                        src="/images/product-details-1.jpg"
                        alt=""
                        class="cart-image w-100"
                      />
                    </td>
                    <td style="width: 35%;">
                      <div class="product-title">Sofa</div>
                      <div class="product-subtitle">By Laras</div>
                    </td>
                    <td style="width: 35%;">
                      <div class="product-title">$29.99</div>
                      <div class="product-subtitle">USD</div>
                    </td>
                    <td style="width: 20%;">
                      <a href="#" class="btn btn-remove-cart">Remove</a>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 25%;">
                      <img
                        src="/images/product-details-1.jpg"
                        alt=""
                        class="cart-image w-100"
                      />
                    </td>
                    <td style="width: 35%;">
                      <div class="product-title">Sofa</div>
                      <div class="product-subtitle">By Laras</div>
                    </td>
                    <td style="width: 35%;">
                      <div class="product-title">$29.99</div>
                      <div class="product-subtitle">USD</div>
                    </td>
                    <td style="width: 20%;">
                      <a href="#" class="btn btn-remove-cart">Remove</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="row" data-aos="fade-up" data-aos-delay="150">
            <div class="col-12">
              <hr />
            </div>
            <div class="col-12">
              <h2 class="mb-4">Shipping Details</h2>
            </div>
          </div>
          <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressOne">Address 1</label>
                <input
                  type="text"
                  class="form-control"
                  id="addressOne"
                  name="addressOne"
                  value="Setra Duta Cemara"
                />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressTwo">Address 2</label>
                <input
                  type="text"
                  class="form-control"
                  id="addressTwo"
                  name="addressTwo"
                  value="Plugebang, Cakung, Blok 7"
                />
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="province">Province</label>
               <select name="province" id="province" class="form-control">
                 <option value="West Java">West Java</option>
               </select>
              </div>
          </div>
          <div class="col-md-4">
              <div class="form-group">
                <label for="city">City</label>
               <select name="city" id="city" class="form-control">
                 <option value="Bandung">Bandung</option>
               </select>
              </div>
          </div>
          <div class="col-md-4">
              <div class="form-group">
                <label for="postal-code">Postal Code</label>
                <input
                  type="text"
                  class="form-control"
                  id="postal-code"
                  name="postal-code"
                  value="19455"
                />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="country">Country</label>
                <input
                  type="text"
                  class="form-control"
                  id="country"
                  name="country"
                  value="Indonesia"
                />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="mobile">Mobile</label>
                <input
                  type="text"
                  class="form-control"
                  id="mobile"
                  name="mobile"
                  value="+628 0000 0000"
                />
              </div>
            </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="150">
            <div class="col-12">
              <hr />
            </div>
            <div class="col-12">
              <h2 class="mb-4">Payment Information</h2>
            </div>
          </div>
          <div class="row" data-aos="fade-up" data-aos-delay="200">
            <div class="col-4 col-md-2">
              <div class="product-title">$18</div>
              <div class="product-subtitle">Country Tax</div>
            </div>
            <div class="col-4 col-md-3">
              <div class="product-title">$18</div>
              <div class="product-subtitle">Product Insurance</div>
            </div>
            <div class="col-4 col-md-2">
              <div class="product-title">$18</div>
              <div class="product-subtitle">Ship to Jakarta</div>
            </div>
            <div class="col-4 col-md-2">
              <div class="product-title text-success">$18</div>
              <div class="product-subtitle">Total</div>
            </div>
            <div class="col-8 col-md-3">
              <a href="/success.html" class="btn btn-success mt-4 btn-block">Check Out Now</a>
            </div>
          </div>
      </section>
    </div>
@endsection