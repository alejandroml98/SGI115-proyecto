@extends('layouts.app', ['activePage' => 'uso-insumos', 'titlePage' => __('Uso de insumos en producción')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Resumen de ventas y gastos</h4>
            <p class="card-category"> Ventas y gastos por sucursal de la empresa</p>
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
                    <option>Todas las sucursales</option>          
                    <option>Sucursal San Salvador</option>
                    <option>Sucursal Opico</option>
                    <option>Sucursal Santa Ana</option>
                    <option>Sucursal San Miguel</option>
                    <option>Sucursal Ilobasco</option>
                  </select>
                </div>
              </div>
            </form>            
          </div>
          <div class="card-body">
            @if (0)
            <div class="table-responsive">
              <h3>Ventas</h3>
              <table class="table">
                <thead class=" text-danger">                    
                    <th>Sucursal</th>
                    <th>Ventas</th>
                    <th>Gastos</th>
                    <th>Diferencia</th>
                </thead>
                <tbody>
                    <tr>                      
                      <td>San Salvador</td>
                      <td>$60,000.43</td>
                      <td>$25,327.80</td>
                      <td class="text-success">$34,672.63</td>
                    </tr>
                    <tr>                      
                      <td>Opico</td>
                      <td>$20,000.95</td>
                      <td>$15,000.30</td>
                      <td class="text-success">$5,000.65</td>
                    </tr>
                    <tr>
                      <td>Santa Ana</td>
                      <td>$51,100.15</td>
                      <td>$23,000.30</td>
                      <td class="text-success">$28,099.85</td>
                    </tr>                  
                    <tr>
                      <td>Santa Miguel</td>
                      <td>$45,200.20</td>
                      <td>$21,000.60</td>
                      <td class="text-success">$24,199.60</td>
                    </tr>
                    <tr>
                      <td>Ilobasco</td>
                      <td>$18,000.70</td>
                      <td>$20,000.45</td>
                      <td class="text-danger">$1,999.75</td>
                    </tr>  
                </tbody>
              </table>
              @if (0)       
              <h3>Gastos</h3>
              <table class="table">                
                <thead class=" text-danger">                    
                    <th>Name</th>
                    <th>Country</th>
                    <th>City</th>
                    <th>Salary</th>
                </thead>                
                <tbody>
                    <tr>                      
                      <td>Dakota Rice</td>
                      <td>Niger</td>
                      <td>Oud-Turnhout</td>
                      <td class="text-danger">$36,738</td>
                    </tr>
                    <tr>
                      <td>Minerva Hooper</td>
                      <td>Curaçao</td>
                      <td>Sinaai-Waas</td>
                      <td class="text-danger">$23,789</td>
                    </tr>
                    <tr>
                      <td>Sage Rodriguez</td>
                      <td>Netherlands</td>
                      <td>Baileux</td>
                      <td class="text-danger">$56,142</td>
                    </tr>                    
                </tbody>
              </table>
              @endif
            </div>    
            @else
            <h2>No se encontraron datos en el rango de fechas establecidos</h2>
            @endif
            
          </div>
        </div>
      </div>      
    </div>
  </div>
</div>
@endsection