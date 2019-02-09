<form role="form" id="updatorder" class="form-horizontal">
     @csrf
                      <div class="row">
                        <div class="col-lg-6">
                            <input type="hidden" id="updatorderid" name="id" value="<?php echo $customer->id; ?>">
                                <div class="form-group">
                                    <label> name </label>
                                    <input class="form-control" placeholder=" Name" name="CutomerName" value="<?php echo $customer->customer_name; ?>" required >
                                   
                                </div>
                                <div class="form-group">
                                    <label>Contact Number </label>
                                    <input class="form-control" placeholder="Contact Number" name="ContactName" value="<?php echo $customer->contact_number; ?>"  required >
                                   
                                </div>
                                <div class="form-group">
                                    <label>Product Name</label>
                                    <input class="form-control" placeholder="Enter Your Product name" value="<?php echo $customer->product_name; ?>" name="ProductName" required >
                                </div>
                                <div class="form-group">
                                    <label>Product Link</label>
                                    <input class="form-control" placeholder="Enter Your Product Link" value="<?php echo $customer->product_link; ?>"  name="ProductLink" required >
                                </div>
                                <div class="form-group">
                                    <label>Quantity</label>
                                    <input class="form-control" placeholder="Enter Product Quantity" name="Quantity" value="<?php echo $customer->product_qty; ?>" required >
                                </div>
                                <div class="form-group">
                                    <label>Sale By</label>
                                    <input class="form-control" placeholder="Enter Sales Man name" Name="SalesBy" value="<?php echo $customer->sale_by; ?>" required >
                                </div>

                                <div class="form-group">
                                    <label>Purchased By</label>
                                    <input class="form-control" placeholder="Enter Purchased Man name" Name="PurchasedBy" value="<?php echo $customer->purchased_by; ?>" required >
                                </div>
                                <div class="form-group">
                                    <label>Order Status</label>
                                    <input class="form-control" placeholder="Order status" Name="OrderStatus" value="<?php echo $customer->order_status; ?>" required >
                                </div>
                                <div class="form-group">
                                    <label>Buying Place</label>
                                    <input class="form-control" placeholder="Buying Place" Name="BuyingPlace" value="<?php echo $customer->bying_place; ?>" required >
                                </div>
                                <div class="form-group">
                                    <label>Bkash Last 4 Digit</label>
                                    <input class="form-control" placeholder="4 Digit Bkash" Name="BkashLast4Digit" value="<?php echo $customer->bkash_l4digit; ?>" required>
                                </div>


                                
                            
                        </div>
                        <!-- /.col-lg-6 (nested) -->
                        <div class="col-lg-6">

                                <div class="form-group">
                                    <label>Sale Price in dollar</label>
                                    <input class="form-control" placeholder="Enter Your Sale Price in Dollar" name="Sale-Price-in-dollar" value="<?php echo $customer->sale_price_in_dollar; ?>" required >
                                </div>
                                    <div class="form-group">
                                        <label>Buying Price in dollar</label>
                                        <input class="form-control" placeholder="Enter Your Buying Price in dollar" name="Buying-Price-in-dollar" value="<?php echo $customer->buying_price_in_dollar; ?>" required >
                                    </div>
                                    <div class="form-group">
                                        <label>Actual Buying Price</label>
                                        <input class="form-control" placeholder="Enter Your Actual Buying Price" name="Actual-Buying-Price" value="<?php echo $customer->actual_buying_price; ?>" required >
                                    </div>
                                    <div class="form-group">
                                        <label>Profit Percentage (%)</label>
                                        <input class="form-control" placeholder="Enter Your Profit" name="Profit-Percentage" value="<?php echo $customer->profit_percentage; ?>" required >
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Total Order Amount</label>
                                        <input class="form-control" placeholder="Enter Total Order Amount" name="Total-Order-Amount" value="<?php echo $customer->total_order_amount; ?>" required >
                                    </div>
                                    <div class="form-group">
                                        <label>Bkash Receive</label>
                                        <input class="form-control" placeholder="Enter Bkash Receive Amount" name="Bkash-Receive" value="<?php echo $customer->bkash_receive; ?>" required >
                                    </div>
                                    <div class="form-group">
                                        <label>Advance Adjusted</label>
                                        <select class="form-control" name="Advance-Adjusted"  required>
                                            <option>--Select--</option>
                                            <option <?php if($customer->advance_adjusted=='Yes'){ echo 'selected'; } ?> value="Yes">Yes</option>
                                            <option value="No" >NO</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Card Last 4 Digit</label>
                                        <input class="form-control" placeholder="Enter Card Last 4 Digit" name="Card-Last-4-Digit" value="<?php echo $customer->card_last_4digit; ?>" required >
                                    </div>
                                    <div class="form-group">
                                        <label>Cash Receive</label>
                                        <input class="form-control" placeholder="Enter Cash Receive" name="Cash-Receive" value="<?php echo $customer->cash_receive; ?>" required >
                                    </div>

                                    <div class="form-group">
                                        <label>For Courier charge</label>
                                        <input class="form-control" placeholder="Enter For Courier charge" name="For-Courier-charge" value="<?php echo $customer->for_courier_charge; ?>" required >
                                    </div>

                            
                                </div>
                              </div>
                            </form>