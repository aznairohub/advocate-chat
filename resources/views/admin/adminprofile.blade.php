@extends('admin.index')
@section('adminbody')
<section style="background-color:lightslategray;margin-left:200px">
    <div class="container"style="background-color:lightslategray">
        <div class="row"style="background-color:lightslategray">
            <div class="col-sm-3"></div>
            <div class="col-sm-6" style="background-color:lightslategray">
                <form action="/editprofileaction" method="post" style="padding-top: 150px;  ">
                    <center>
                    <table>
                        <tr>
                            <th style="padding-left:75px;width:100%"><label for="">Username</label></th>
                            <td style="padding-left:75px;width:100%">
                                <input type="text" name="name"  value="">
                            </td>
                        </tr>
                        <tr>
                            <th style="padding-left:75px;width:100%"><label for="">Password</label></th>
                            <td style="padding-left:75px;width:100%">
                                <input type="password" name="password"  value="">
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-left:75px;width:100%">
                                <input type="submit" class="btn btn-block btn-dark" value="Edit">
                            </td>
                            <td style="padding-left:75px;width:100%">
                                <input type="reset" class="btn btn-block btn-dark" value="Reset">
                            </td>
                        </tr>
                    </table>
                    </center>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection