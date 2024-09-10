<?php 
require_once 'app/Repositories/UserRepository.php';
class UserService {
  private $userRepository;
  public function __construct(UserRepository $useRepository)
  {
    $this-> userRepository = $useRepository;
  }

  public function creatUser($data){
    $user = new User();
    $user->nombre = $data['nombre'];
    $user->apaterno = $data['apaterno'];
    $user->amaterno = $data['amaterno'];
    $user->direccion = $data['direccion'];
    $user->telefono = $data['telefono'];
    $user->ciudad = $data['ciudad'];
    $user->usuario = $data['usuario'];
    $user->password = password_hash($data['password'], PASSWORD_BCRYPT);
    $user ->rol = $data['rol'];

    return $this->userRepository->create($user);
  }
}

?>