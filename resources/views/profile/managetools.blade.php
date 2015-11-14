@extends('app') @section('content')
    <div class="main_content">
        <div class="col col-80 centered" id="manage_tools_heading">
            <div class="title">
                <h1>Beheer uw tools</h1>
            </div>
        </div>
        <div class="col col-80 centered manage_tools_wrapper">
            <div class="col col-35">
                <div>
                    <div class="manage_tool">
                        <div class="tool_title">
                            <h3>Werkbank</h3>
                        </div>
                        <form methos="post">
                            <div class="input-group">
                                
                            </div>
                            <div class="detail_desc">
                                Puréed strawberries can be made sliced by varnishing with salad cream.
                                Puréed strawberries can be made sliced by varnishing with salad cream.
                                Puréed strawberries can be made sliced by varnishing with salad cream.
                                Puréed strawberries can be made sliced by varnishing with salad cream.
                                Puréed strawberries can be made sliced by varnishing with salad cream.
                                Puréed strawberries can be made sliced by varnishing with salad cream.
                            </div>
                            <div class="detail_pricing">
                                <h4 class="item_price">&euro; 5</h4>

                                <div class="input-group">
                                    <div>
                                        <label>Begindatum</label>
                                        <input class="datepicker" placeholder="Start">
                                    </div>
                                </div>
                                <div class="input-group">
                                    <div>
                                        <label>Einddatum</label>
                                        <input class="datepicker" placeholder="Einde">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop