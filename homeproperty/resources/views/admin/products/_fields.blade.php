
                                <div class="form-group {{ $errors->has('product') ? 'has-error':''}}">
                                     {!! Form::label('product_name','Product Name') !!}
                                     {!! Form::text('product',$product->product,['class'=>'form-control border-input','placeholder'=>'Mac Book'])!!}
                                    <span class="text-danger">{{ $errors->has('product') ? $errors->first('product'):''}}</span>
                                </div>

                                <div class="form-group  {{ $errors->has('price') ? 'has-error':''}}">
                                    {!! Form::label('product_price','Product Price') !!}
                                    {!! Form::text('price',$product->price,['class'=>'form-control border-input','placeholder'=>'$2500'])!!}
                                    <span class="text-danger">{{ $errors->has('price') ? $errors->first('price'):''}}</span>
                                </div>

                                <div class="form-group {{ $errors->has('description') ? 'has-error':''}}">
                                    {!! Form::label('product_description','Description') !!}
                                    {!! Form::textarea('description',$product->description,['class'=>'form-control border-input','placeholder'=>'Product Description'])!!}
                                    <span class="text-danger">{{ $errors->has('description') ? $errors->first('description'):'' }}</span>
                                </div>

                                <div class="form-group {{ $errors->has('image') ? 'has-error':''}}">
                                        {!! Form::label('file','File') !!}
                                        {!! Form::file('image',['class'=>'form-control border-input' ,'id'=>'image','value'=>'{{$product->image}}'] )!!}
                                        <div id="thumb-output"> <img src="/uploads/{{$product->image}}" class="img-thumbnail" width="154" height="76"></div>
                                        <span class="text-danger">{{$errors->has('image') ? $errors->first('image'):''}}</span>
                                </div>
