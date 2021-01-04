<?PHP
class Reclamation{
	private $id;
	private $nom;
	private $email;
    private $subject;
    private $message;
	
	function __construct($id,$nom,$email,$subject,$message){
		$this->id=$id;
		$this->nom=$nom;
		$this->email=$email;
		$this->subject=$subject;
		$this->message=$message;
	}
	
	function getId(){
		return $this->id;
	}
	function getNom(){
		return $this->nom;
	}
	function getEmail(){
		return $this->email;
	}
	function getSubject(){
		return $this->subject;
	}
	function getMessage(){
		return $this->message;
	}
        function setId($id){
		$this->id=$id;
	}

	function setNom($nom){
		$this->nom=$nom;
	}
	function setEmail($email){
		$this->email;
	}
	function setSubject($subject){
		$this->subject=$subject;
	}
	function setMessage($message){
		$this->message=$message;
	}
	
}

?>