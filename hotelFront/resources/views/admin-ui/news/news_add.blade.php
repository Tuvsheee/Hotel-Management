@extends('admin-ui.layout.master')

@section('body-section')
<div class="row">
                    <div class="col-lg-10">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Шинэ Пост оруулах:</h4>
                                <form action="{{route('news_store')}}"   method="post"  
                                enctype="multipart/form-data"  
                                class="form-horizontal form-material mx-2">
                                    @csrf
                                    <div class="form-group">
                                       
                                        <label class="col-md-12">Постны гарчиг:</label>
                                        <div class="col-md-12">
                                            <input type="text" name="title"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       
                                        <label class="col-md-12">Дэлгэрэнгүй:</label>
                                        <div class="col-md-12">
                                            <input type="text" name="description"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>

                                    

                                    <div class="form-group">
                                       
                                        <label class="col-md-12">Зураг:</label>
                                        <div class="col-md-12">
                                            <input type="file" name="image"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                   

                                    
                                    <!-- <div class="form-group">
                                        <select name="cat" id="">
                                            @foreach($cat as $c)
                                            <option value="{{$c->id}}">{{$c->name}}</option>
                                            @endforeach
                                        </select>
                                    </div> -->
                
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input type="submit" name="submit" value="Insert" class="btn btn-success">
                                        </div>
                                    </div>
                                </form>     
                               
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End PAge Content -->
                </div>
                
@endsection