@include('includes.header')

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
           <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Add Product</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Products</a></li>
                                            <li class="breadcrumb-item active">Add Product</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        
                        

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Add Product</h4>
                                        <p class="card-title-desc">PristineJS Vanilla javascript form validation library</p>
                                    </div>
                                    <!-- end card header -->

                                    <div class="card-body">
                                        
                                        <div>
                                            
                                            <form id="pristine-valid-specificfield" action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                                                @csrf    
                                                <input type="hidden" />
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group mb-3">
                                                        <label class="form-label">Brand Select</label>
                                                        <select name="brand_id" class="form-select">
                                                            <option selected="" disabled="">Brand Select</option>
                                                            @foreach($brands as $brand)
                                                            <option value="{{ $brand->id }}">{{ $brand->brand_name_en }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('category_id')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div> 
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group mb-3">
                                                        <label class="form-label">Category Select</label>
                                                        <select name="category_id" class="form-select">
                                                            <option selected="" disabled="">Category Select</option>
                                                            @foreach($categories as $category)
                                                            <option value="{{ $category->id }}">{{ $category->category_name_en }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('category_id')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div> 
                                                    </div>
                                            
                                                    <div class="col-md-4">
                                                        <div class="form-group mb-3">
                                                        <label class="form-label">SubCategory Select</label>
                                                        <select name="subcategory_id" class="form-select">
                                                            <option selected="" disabled="">Category Select</option>
                                                            
                                                        </select>
                                                        @error('subcategory_id')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div> 
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group mb-3">
                                                        <label class="form-label">SubSubCategory Select</label>
                                                        <select name="suubsubcategory_id" class="form-select">
                                                            <option selected="" disabled="">SubSubCategory Select</option>
                                                            
                                                        </select>
                                                        @error('subsubcategory_id')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div> 
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group mb-3">
                                                            <label class="form-label">Product Name English</label>
                                                            <input type="text" name="product_name_en" class="form-control" required id="product_name_en" placeholder="Enter product name en"/>
                                                        @error('product_name_en')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                        </div> 
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group mb-3">
                                                            <label class="form-label">Product Name Hindi</label>
                                                            <input type="text" name="product_name_hin" class="form-control" required id="product name hin" placeholder="Enter product name en"/>
                                                        @error('product_name_hin')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                        </div> 
                                                    </div>
                                                    <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="choices-text-unique-values" class="form-label font-size-13 text-muted">Product Slug English</label>
                                                        <input class="form-control" name="product_slug_en" id="product_slug_en" type="text"
                                                             placeholder="Enter product slug en"
                                                            class="custom class" />
                                                            @error('product_slug_en')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group mb-3">
                                                            <label class="form-label">Product Slug Hindi</label>
                                                            <input type="text" name="product_slug_hin" class="form-control" required id="product_slug_hin" placeholder="Enter product slug hin"/>
                                                        @error('product_slug_hin')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                        </div> 
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group mb-3">
                                                            <label class="form-label">Category Name English</label>
                                                            <input type="text" name="product_code" class="form-control" required id="product_code" placeholder="Enter category product code"/>
                                                        @error('product_code')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                        </div> 
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group mb-3">
                                                            <label class="form-label">Product Qty</label>
                                                            <input type="text" name="product_qty" class="form-control" required id="product_qty" placeholder="Enter category name en"/>
                                                        @error('product_qty')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                        </div> 
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                    <div class="form-group mb-3">
                                                        <label for="choices-multiple-default" class="form-label font-size-13 text-muted">Product Tags English</label>
                                                        <select name="product_tags_en" class="form-control" data-trigger
                                                            name="choices-multiple-default" id="choices-multiple-default"
                                                            placeholder="This is a placeholder" multiple>
                                                            <option value="Choice 1" selected>Choice 1</option>
                                                            <option value="Choice 2">Choice 2</option>
                                                            <option value="Choice 3">Choice 3</option>
                                                            <option value="Choice 4" disabled>Choice 4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                    <div class="col-lg-4 col-md-4">
                                                    <div class="form-group mb-3">
                                                        <label for="choices-multiple-default" class="form-label font-size-13 text-muted">Product Tags Hindi</label>
                                                        <select class="form-control" name="product_tags_hin" data-trigger
                                                            name="choices-multiple-default" id="choices-multiple-default"
                                                            placeholder="This is a placeholder" multiple>
                                                            <option value="Choice 1" selected>Choice 1</option>
                                                            <option value="Choice 2">Choice 2</option>
                                                            <option value="Choice 3">Choice 3</option>
                                                            <option value="Choice 4" disabled>Choice 4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                    <div class="col-lg-4 col-md-4">
                                                    <div class="form-group mb-3">
                                                        <label for="choices-multiple-default" class="form-label font-size-13 text-muted">Product Size English</label>
                                                        <select class="form-control" name="product_size_en" data-trigger
                                                            name="choices-multiple-default" id="choices-multiple-default"
                                                            placeholder="This is a placeholder" multiple>
                                                            <option value="Choice 1" selected>Choice 1</option>
                                                            <option value="Choice 2">Choice 2</option>
                                                            <option value="Choice 3">Choice 3</option>
                                                            <option value="Choice 4" disabled>Choice 4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                    <div class="col-lg-4 col-md-4">
                                                    <div class="form-group mb-3">
                                                        <label for="choices-multiple-default" class="form-label font-size-13 text-muted">Product Size Hindi</label>
                                                        <select class="form-control" name="product_size_hin" data-trigger
                                                            name="choices-multiple-default" id="choices-multiple-default"
                                                            placeholder="This is a placeholder" multiple>
                                                            <option value="Choice 1" selected>Choice 1</option>
                                                            <option value="Choice 2">Choice 2</option>
                                                            <option value="Choice 3">Choice 3</option>
                                                            <option value="Choice 4" disabled>Choice 4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                    <div class="col-lg-4 col-md-4">
                                                    <div class="form-group mb-3">
                                                        <label for="choices-multiple-default" class="form-label font-size-13 text-muted">Product Color English</label>
                                                        <select class="form-control" name="product_color_en" data-trigger
                                                            name="choices-multiple-default" id="choices-multiple-default"
                                                            placeholder="This is a placeholder" multiple>
                                                            <option value="Choice 1" selected>Choice 1</option>
                                                            <option value="Choice 2">Choice 2</option>
                                                            <option value="Choice 3">Choice 3</option>
                                                            <option value="Choice 4" disabled>Choice 4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                    <div class="col-lg-4 col-md-4">
                                                    <div class="form-group mb-3">
                                                        <label for="choices-multiple-default" class="form-label font-size-13 text-muted">Product Color Hindi</label>
                                                        <select class="form-control" name="product_color_hin" data-trigger
                                                            name="choices-multiple-default" id="choices-multiple-default"
                                                            placeholder="This is a placeholder" multiple>
                                                            <option value="Choice 1" selected>Choice 1</option>
                                                            <option value="Choice 2">Choice 2</option>
                                                            <option value="Choice 3">Choice 3</option>
                                                            <option value="Choice 4" disabled>Choice 4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group mb-3">
                                                            <label class="form-label">Selling Price</label>
                                                            <input type="text" name="selling_price" class="form-control" required id="selling_price" placeholder="Enter selling price"/>
                                                        @error('selling_price')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                        </div> 
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group mb-3">
                                                            <label class="form-label">Discount Price</label>
                                                            <input type="text" name="discount_price" class="form-control" required id="discount_price" placeholder="Enter discount price"/>
                                                        @error('discount_price')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                        </div> 
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group mb-3">
                                                            <label class="form-label">Short Descp English</label>
                                                            <textarea name="short_descp_en" class="form-control" id="short_descp_en" class="form-control" rows="2" placeholder="Enter short descp en"></textarea>
                                                            
                                                        @error('short_descp_en')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                        </div> 
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group mb-3">
                                                            <label class="form-label">Short Descp Hindi</label>
                                                            <textarea name="short_descp_hin" class="form-control" id="short_descp_hin" class="form-control" rows="2" placeholder="Enter short descp hin"></textarea>
                                                        @error('short_descp_hin')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                        </div> 
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group mb-3">
                                                            <label class="form-label">Long Descp English</label>
                                                            <textarea name="long_descp_en" class="form-control" id="long_descp_en" class="form-control" rows="2" placeholder="Enter long descp en"></textarea>
                                                        @error('long_descp_en')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                        </div> 
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group mb-3">
                                                            <label class="form-label">Long Descp Hindi</label>
                                                            <textarea name="long_descp_hin" class="form-control" id="long_descp_hin" class="form-control" rows="2" placeholder="Enter long descp hin"></textarea>
                                                        @error('long_descp_hin')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                        </div> 
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group mb-3">
                                                            <label class="form-label">Product Thambnail</label>
                                                            <input type="file" name="product_thambnail" class="form-control" required id="product_thambnail"/>
                                                        @error('product_thambnail')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                        </div> 
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group mb-3">
                                                            <label class="form-label">Product Multiple Image</label>
                                                            <input type="file" name="multi_img[]" class="form-control" required id="multi_img"/>
                                                        @error('multi_img')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                        </div> 
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group mb-3">
                                                            <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="hot_deals" name="hot_deals" required="">
                                                            <label class="form-check-label" for="hot_deals">Hot Deals</label>
                                                        </div>
                                                        @error('hot_deals')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                        </div> 
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group mb-3">
                                                            <input type="checkbox" class="form-check-input" id="featured" name="featured" required="">
                                                            <label class="form-check-label" for="featured">Featured</label>
                                                        @error('featured')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                        </div> 
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group mb-3">
                                                            <input type="checkbox" class="form-check-input" id="special_offer" name="special_offer" required="">
                                                            <label class="form-check-label" for="special_offer">Special Offer</label>
                                                        @error('special_offer')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                        </div> 
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group mb-3">
                                                            <input type="checkbox" class="form-check-input" id="special_deals" name="special_deals" required="">
                                                            <label class="form-check-label" for="special_deals">Special Deals</label>
                                                        @error('special_deals')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                        </div> 
                                                    </div>
                                                    
                                                <div class="form-group">
                                                    <button  type="submit" class="btn btn-primary">Add Product</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>             
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    <footer class="footer">
        @include('includes.footer')
    </footer>
</div>
<!-- end main content-->
<!-- Right Sidebar -->
<div class="right-bar">
    @include('includes.sidebar')
</div>
<!-- /Right-bar -->