@extends('layout.erp.app')

@section('style')
<style>


.input-icons {
    position: relative;
    display: inline-block;
}


.input-icons i {
    position: absolute;
    padding: 10px;
    pointer-events: none;
}


.input-field {
    padding-left: 35px; 
}

</style>
@endsection
@section('page')

<div class="row">
    <div class="col-6">
        <table style="" class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th colspan="2" class="text-center">
                        <h4 class="text-success">Create Menu</h4>
                    </th>
                </tr>
            </thead>
            <tbody>
                <form id="menuForm" action="{{ route('menu.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <tr>
                        <td>Category</td>
                        <td>
                            <select class="form-select" name="category_id" id="category_id">
                                <option value="-1">Select</option>
                                @forelse ($categories as $k=>$v)
                                <option value="{{$k}}">{{$v}}</option>
                                @empty
        
                                @endforelse
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Sub-Category</td>
                        <td>
                        <select class="form-select" name="subcategory_id" id="subcategory_id">
                            
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Details</td>
                        <td>
                        <input type="text" id="menu-details" class="form-control" name="details" maxlength="255" aria-required="true">
                        </td>
                    </tr>
                    <tr>
                        <td>Images</td>
                        <td>
                            <input type="file" name="images[]" id="images" class="form-control" required multiple>
                        </td>
                    </tr>
                    <tr>
                        <td>Price</td>
                        <td>
                            <label class="control-label" for="product-price">Price</label>
                            <input type="text" id="product-price" class="form-control" name="price" aria-required="true">
                        </td>
                    </tr>
                    <tr>
                    <tr>
                        <td>Quantity</td>
                        <td>
                            <input type="text" id="menu-quantity" class="form-control" name="quantity" aria-required="true">
                        </td>
                    </tr>
                    <tr>
                        <td>Discount</td>
                        <td>
                            <input value='0' type="text" id="menu-discount" class="form-control" name="discount" aria-required="true">
                        </td>
                    </tr>
                    <tr>
                        <td>Active</td>
                        <td>
                            <input value="1" type="checkbox" id="active" class="form-check" name="active">
                        </td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>
                            <input type="text" id="product-status" class="form-control" name="Product[status]" value="1">
                        </td>
                    </tr>
                    <tr>
                        <td>Fetured</td>
                        <td>
                            <input value="0" type="checkbox" id="featured" class="form-check" name="featured">
                        </td>
                    </tr>
        
                   
                    </tr>
             
            </tbody>
        </table>
        
    </div>
    <div class="col-6">

        <table style="" class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th colspan="2" class="text-center">
                        <h4 class="text-success">Add Menu Materials</h4>
                    </th>
                </tr>
            </thead>
            <tbody>           
                    <tr>
                       
                        <td>
                                <div class="input-icons">
                                    <i class='fa-solid fa-magnifying-glass'></i>
                                    <input placeholder="  Search Material" type="search"  id="searchMaterial" class="form-control input-field" required >
                               
                                </div>                           
                         
                        </td>
                    </tr>
                    {{-- <tr>
                        <td colspan="2">
                            <input id="addMenu" class="btn btn-success mt-3" type="button" value="Add Menu">
                        </td>
                    </tr> --}}
               
            </tbody>
        </table>

        <div class="table-responsive">
            <table class="table  table-striped table-borderless border-0 border-b-2 brc-default-l1">
                <thead style="background-color: #79B594;" class="">
                    <tr class="text-white">
                        <th class="opacity-2">#</th>

                        <th>Name</th>
                        <th>Unit</th>
                        <th>Ammount</th>
                       

                    </tr>
                </thead>


                <tbody id="dyn_tr" class="text-95 text-secondary-d3">

                </tbody>
            </table>
            <input id="addMenu" class="btn-primary-custom mt-3" type="submit" value="Add Menu">
        </form>  
        </div>

    </div>
</div>


@endsection


@section('script')
<script>
     function financial(x) {
        return Number.parseFloat(x).toFixed(2);
    }

    $("#searchMaterial").autocomplete({
        source: "{{url('mtsearch')}}",
        minLength: 1,
        select: function(event, ui) {
            // console.log(ui)

            var html = "";
            html += "<tr>";
            html += "<td class='material_id'>" + ui.item.id + "</td>";
            html += "<td>" + ui.item.name + "</td>";
            html += "<td class='price'>" + ui.item.unit + "</td>";
            // html += "<td class='itemtotal'>" + ui.item.quantity + "</td>";
            html += "<td><input value='1' class='qu w-25 form-control' type='number'></td>";

            html += "</tr>";

            $('#dyn_tr').append(html);
            $("#searchMaterial").val("").focus();
           
        }

    });

       
        $('#menuForm').submit(function(e) {
            e.preventDefault(); 
        
            var formData = new FormData(this);


        var material = [];

        $('.material_id').each(function() {
            var material_id = $(this).text();
            var qty = $(this).closest('tr').find('.qu').val();
            // alert(material_id + ' ' + qty);

            material.push({
                material_id: material_id,
                qty: qty
            });
        });

        formData.append('materials', JSON.stringify(material));

        $.ajax({
            url: "{{route('menu.store')}}",
            type: 'post',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                
                // console.log(response);
                // alert(response.message);
                Swal.fire({
                    position: 'top-end', 
                    icon: 'success',
                    title: response.message,
                    showConfirmButton: false,
                    timer: 1500,
                    customClass: {
                        container: 'custom-swal-container',
                    },
                });

                location.reload();

            }
        });
        
        })


    function decorate_subcat(d) {
        // console.log(d);
        $h = "<option value='-1'>Select</option>";
        for (const k in d) {
            $h += "<option value='" + k + "'>" + d[k] + "</option>";
        }
        $("#subcategory_id").html($h);
    }

    $(document).ready(function() {
        $("#category_id").change(function() {
            let id = $(this).val();

            if (id == "-1") {
                return;
            }
            let url = "{{url('getsubcat')}}/" + id;
            // alert(url);
            // alert(id);
            $.get(url, {}, function(d) {

                decorate_subcat(d);
            });


        })
        
    });
</script>

@endsection