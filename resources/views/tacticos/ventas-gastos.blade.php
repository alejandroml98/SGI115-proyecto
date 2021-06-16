@extends('layouts.app', ['activePage' => 'ventas-gastos', 'titlePage' => __('Resumen ventas y gastos')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Reporte tactico x</h4>
            <p class="card-category"> Here is a subtitle for this table</p>
            <form action="#" method="get">
              <div class="row bg-light text-dark rounded mx-1">
                <div class="col border border-dark rounded">
                  <label for="a">Fecha inicio</label>
                  <input class="form-control" type="date" name="a" id="a"> 
                </div>
                <div class="col border border-dark rounded">
                  <label for="b">Fecha final</label>
                  <input class="form-control" type="date" name="b" id="b"> 
                </div>
                <div class="col border border-dark rounded">
                  <select class="form-control" id="exampleFormControlSelect2">
                    <option>Selecciona un producto</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </div>
            </form>            
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Country</th>
                    <th>City</th>
                    <th>Salary</th>
                </thead>
                <tbody>
                    <tr>
                      <td>1</td>
                      <td>Dakota Rice</td>
                      <td>Niger</td>
                      <td>Oud-Turnhout</td>
                      <td class="text-primary">$36,738</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Minerva Hooper</td>
                      <td>Curaçao</td>
                      <td>Sinaai-Waas</td>
                      <td class="text-primary">$23,789</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Sage Rodriguez</td>
                      <td>Netherlands</td>
                      <td>Baileux</td>
                      <td class="text-primary">$56,142</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Philip Chaney</td>
                      <td>Korea, South</td>
                      <td>Overland Park</td>
                      <td class="text-primary">$38,735</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Doris Greene</td>
                      <td>Malawi</td>
                      <td>Feldkirchen in Kärnten</td>
                      <td class="text-primary">$63,542</td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>Mason Porter</td>
                      <td>Chile</td>
                      <td>Gloucester</td>
                      <td class="text-primary">$78,615</td>
                    </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>      
    </div>
  </div>
</div>
@endsection