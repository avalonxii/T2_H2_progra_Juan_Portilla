<?php
    class Usuario{
        
        private $id;
        private $nom_usuario;
        private $email;
        private $contraseña;

        function __construct($id, $nom_usuario,$email, $escontraseñatado)
        {
                $this->setId($id);
                $this->setNomUsuario($nom_usuario);
                $this->setEmail($email);
                $this->setContraseña($contraseña);		
        }

        /**
         * Get the value of id
         */
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of nom_usuario
         */
        public function getNomUsuario()
        {
                return $this->nom_usuario;
        }

        /**
         * Set the value of nom_usuario
         *
         * @return  self
         */
        public function setNomUsuario($nom_usuario)
        {
                $this->nom_usuario = $nom_usuario;

                return $this;
        }

        /**
         * Get the value of email
         */
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of contraseña
         */
        public function getContraseña()
        {
                return $this->contraseña;
        }

        /**
         * Set the value of contraseña
         *
         * @return  self
         */
        public function setContraseña($contraseña)
        {
                $this->contraseña = $contraseña;

                return $this;
        }

        public static function save($alumno){
                $db=Db::getConnect();
                var_dump($alumno);
                //die();
                

                $insert=$db->prepare('INSERT INTO alumno VALUES (NULL, :nom_usuario,:email,:contraseña)');
                $insert->bindValue('nombres',$alumno->getNomUsuario());
                $insert->bindValue('email',$email->getEmail());
                $insert->bindValue('contraseña',$contraseña->getContraseña());
                $insert->execute();
        }


        }