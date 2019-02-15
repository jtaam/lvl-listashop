<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <div class="table-responsive">
        <table class="table">
            <tbody>
            <tr>
                <td>
                    <h5>Width</h5>
                </td>
                <td>
                    <h5>{{$product->specification->width}} mm</h5>
                </td>
            </tr>
            <tr>
                <td>
                    <h5>Height</h5>
                </td>
                <td>
                    <h5>{{$product->specification->height}} mm</h5>
                </td>
            </tr>
            <tr>
                <td>
                    <h5>Depth</h5>
                </td>
                <td>
                    <h5>{{$product->specification->depth}} mm</h5>
                </td>
            </tr>
            <tr>
                <td>
                    <h5>Weight</h5>
                </td>
                <td>
                    <h5>{{$product->specification->weight}} gm</h5>
                </td>
            </tr>
            <tr>
                <td>
                    <h5>Quality checking</h5>
                </td>
                <td>
                    <h5>@if ($product->specification->quality_checking == 1)
                            Yes
                        @else
                            No
                        @endif</h5>
                </td>
            </tr>
            <tr>
                <td>
                    <h5>Freshness Duration</h5>
                </td>
                <td>
                    <h5>{{$product->specification->freshness_duration}} days</h5>
                </td>
            </tr>
            <tr>
                <td>
                    <h5>When packeting</h5>
                </td>
                <td>
                    <h5>{{$product->specification->packeting}}</h5>
                </td>
            </tr>
            <tr>
                <td>
                    <h5>Each Box contains</h5>
                </td>
                <td>
                    <h5>{{$product->specification->box_contains}} pcs</h5>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
