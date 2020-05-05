@extends('base')

@section('top-css')
 <link href="{{asset('/gentelella-master/vendors/select2/dist/css/select2.min.css')}}" rel="stylesheet">
@endsection

@section('content')
  <div class="right_col" role="main" style="min-height: 3788px;">
        <div class="">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Création de commande</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                     <br>
                        <form> 
                            <div class="form-inline">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="produits">Produits </label>                      
                                        <select class="col-md-10" id="produits">
                                            <option></option>
                                            @foreach ($produits as $produit)
                                            <option value="{{$produit->id}}">{{$produit->libelle}}</option>                                          
                                            @endforeach
                                        </select>
                                        <div class="col-md-2">
                                           <button type="button" class="btn btn-success"><i class="fa fa-download"></i></button>
                                        </div>


                                    </div>

                                    <div class="col-md-3">
                                            <label for="origne">Origine</label>                      
                                            <select class="col-md-10"  tabindex="-1" id="origine">
                                                <option></option>
                                                @foreach ($origines as $origine)
                                                  <option value="{{$origine->id}}">{{$origine->pays}}</option>                                          
                                                @endforeach
                                            </select>
                                    </div>

                                    <div class="col-md-1">
                                            <label for="ex4">Quantité</label>
                                            <input type="number" id="ex4" class="form-control"/>
                                    </div>
                                    <div class="col-md-3">
                                            <label for="ex5">Prix</label>
                                            <input type="number" id="ex5" class="form-control"/>
                                    </div>
                                    <div class="col-md-1">
                                            <br>
                                         <a href="{{route('addelement','Justo')}}"> <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i></button></a>
                                    </div>
                                </div>
                            </div>
                            @if(=addelement)
                            @foreach ($productsL as $item)
                                {{$item}}
                            @endforeach
                            <div class="clearfix"></div>

                            <div class="col-md-12">
                                        <br>  <br> 
                                        <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Produit</th>
                                                            <th>Quantité</th>
                                                            <th>Prix</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                            <td class="text-center"><a id="j_idt65:0:removeServiceButton" href="#" class="ui-commandlink ui-widget btn btn-danger red btn-xs icon-only shiny" aria-label="Supprimer" onclick="mojarra.ab('j_idt65:0:removeServiceButton',event,'click','auteur','table_Articles',{'onevent':reinitChosen});PrimeFaces.ab({s:'j_idt65:0:removeServiceButton',p:'createCommandeForm',u:'table_Articles'});return false;" title="Supprimer">
                                                                                <i class="ace-icon fa fa-trash-o bigger-130"></i></a></td>
                                                        </tr>
                                                    </tbody>
                                        </table>
                            </div>
                            <div class="clearfix"></div> <br>  <br> 

                            <div class="col-md-12">
                                                <div class="col-md-6">
                                                    <label class="col-md-2" for="fournisseur">Fournisseur </label>
                                                    <div id="client_id" class="col-md-8">
                                                        <select id="fournisseur" name="fournisseur" class="form-control">
                                                            <option></option>
                                                            @foreach ($fournisseurs as $fournisseur)
                                                            <option value="{{$fournisseur->id}}">{{$fournisseur->nom}}</option>                                          
                                                            @endforeach
                                                        </select>
                                                        
                                                    </div>
                                                    <div class="col-md-2">
                                                            <button type="button" class="btn btn-success"><i class="fa fa-download"></i></button>
                                                     </div>
                                                </div>   
                                                
                                                <div class="col-md-6">
                                                    <label class="col-md-2" for="signataires">Signataires </label>
                                                    <div  class="col-md-8">
                                                        <select id="signataires" name="signataires[]" multiple="multiple" class="form-control">
                                                            <option></option>
                                                             @foreach ($signataires as $signataire)
                                                             <option value="{{$signataire->id}}">{{$signataire->nom}}</option>                                          
                                                             @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <button type="button" class="btn btn-success"><i class="fa fa-download"></i></button>
                                                    </div>
                                                </div>
                            </div>
                                    

                            <div class="clearfix"></div> <br><br>


                            <div class="col-md-9 col-md-offset-5">
                                                <button &id="submit_new" name="submit_new" value="" onclick="mojarra.ab(this,event,'action','@this','msg @form',{'onevent':saveCommande});return false" type="submit" class="btn btn-effect-ripple btn-primary">
                                                    Enregistrer la commande
                                                </button>
                            </div>

                            <div class="clearfix"></div>
                                
                        </form>
                 </div>
                </div>
              </div>
            </div>


  
        </div>
    </div>
@endsection

@section('footer-scripts')
    <script src="{{asset('/gentelella-master/vendors/select2/dist/js/select2.min.js')}}"></script>
    <script type="text/javascript">
        $("#produits").select2({
            placeholder:'Selectionnez le produit',
            allowClear:true
        });    
    </script>
    <script type="text/javascript">
        $("#signataires").select2({
            placeholder:'Selectionnez le signataire',
            allowClear:true
        });    
    </script>
    <script type="text/javascript">
        $("#fournisseur").select2({
            placeholder:'Selectionnez le fournisseur',
            allowClear:true
        });    
    </script>

     <script type="text/javascript">
        $("#origine").select2({
            placeholder:'Selectionnez l\'origine',
            allowClear:true
        });    
    </script>
@endsection