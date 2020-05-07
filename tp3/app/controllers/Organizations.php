class Organizations extends \Ubiquity\controllers\ControllerBase{
    ...
 
    protected function users($idOrga,$idGroupe=null,$users=null){
        if(isset($idGroupe)){
            $group=DAO::getById(Groupe::class,$idGroupe,['users']);
            $title=$group->getName();
            $users=$group->getUsers();
        }else{
            $title="Tous les utilisateurs";
        }
        return $this->loadView("Organizations/users.html",compact("users","title"),true);
         public function display($idOrga,$idGroupe=null){
       			 $orga=DAO::getById(Organization::class, $idOrga,['users','groupes']);
      		     $users=$this->users($idOrga,$idGroupe,$orga->getUsers());
       			 $this->jquery->renderView("Organizations/display.html",["orga"=>$orga,"users"=>$users]);
    }
            <ul>
        {% for groupe in orga.groupes %}
            <li><a href="{{ path('orga-display',[orga.id,groupe.id]) }}" data-target="#users">{{ groupe }}</a></li>
        {% endfor %}
        </ul>
    }