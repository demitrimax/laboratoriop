<?php

use Illuminate\Database\Seeder;
use App\catservicios;

class catserviciosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $Servicios = [
           ['nombre'=> 'Copro Bovinos/Equinos', 'nomb_corto'=> 'coproBovEqno','precio'=> 60],
           ['nombre'=> 'Acido urico', 'nomb_corto'=> 'Acido Urico','precio'=> 70],
          ['nombre'=> 'Albumina', 'nomb_corto'=> 'Albumina','precio'=> 70],
          ['nombre'=> 'ALT TG', 'nomb_corto'=> 'ALT TG','precio'=> 70],
          ['nombre'=> 'Analisis de brucella Ovis', 'nomb_corto'=> 'Anal.BrucellasOvis','precio'=> 80],
          ['nombre'=> 'Analisis de durina', 'nomb_corto'=> 'Anal. Durina','precio'=> 350],
          ['nombre'=> 'Analisis de lengua azul', 'nomb_corto'=> 'Anal.LenguaAzul','precio'=> 350],
          ['nombre'=> 'Analisis de leucosis bovina', 'nomb_corto'=> 'Anal.Leucosis Bovina','precio'=> 250],
          ['nombre'=> 'Analisis de muermo', 'nomb_corto'=> 'Anal. Muermo','precio'=> 350],
          ['nombre'=> 'Analitica hormonal 4 horonas', 'nomb_corto'=> 'AnaliticHorm4Horonas','precio'=> 550],
          ['nombre'=> 'Anemia Infecciosa Equina', 'nomb_corto'=> 'Anemia Inf. Equina','precio'=> 500],
          ['nombre'=> 'AST TG', 'nomb_corto'=> 'AST TG','precio'=> 80],
          ['nombre'=> 'Bilirrubina total', 'nomb_corto'=> 'Bilirrubinal Total','precio'=> 80],
          ['nombre'=> 'Biometria Hematica', 'nomb_corto'=> 'Biometrica Hematica','precio'=> 150],
          ['nombre'=> 'Biopsia 4 cm', 'nomb_corto'=> 'Biopsia 4 cm','precio'=> 1000],
          ['nombre'=> 'Biopsia 7 cm', 'nomb_corto'=> 'Biopsia 7 cm','precio'=> 1400],
          ['nombre'=> 'Brucella (Tarjeta-CHIS)', 'nomb_corto'=> 'Brucella (T.Chis)','precio'=> 5],
          ['nombre'=> 'Brucellas', 'nomb_corto'=> 'Brucellas','precio'=> 7],
          ['nombre'=> 'Busquedas de Hemoparasitos', 'nomb_corto'=> 'Busq. Hemoparasitos','precio'=> 100],
          ['nombre'=> 'Calcio', 'nomb_corto'=> 'Calcio','precio'=> 70],
          ['nombre'=> 'Caratula Dictamen', 'nomb_corto'=> 'Carat.Dict','precio'=> 30],
          ['nombre'=> 'Castraccion gatos hembras', 'nomb_corto'=> 'Cast. Gat. Hemb.','precio'=> 850],
          ['nombre'=> 'Castraccion gatos machos', 'nomb_corto'=> 'Cast. Gat. Mach.','precio'=> 700],
          ['nombre'=> 'Castraccion perros 1500', 'nomb_corto'=> 'Cast. Perros','precio'=> 1500],
          ['nombre'=> 'Check-Up 4DX', 'nomb_corto'=> 'Check-Up 4DX','precio'=> 500],
          ['nombre'=> 'Check-up Completo', 'nomb_corto'=> 'Check-up Completo','precio'=> 1400],
          ['nombre'=> 'Chek-up +Bh', 'nomb_corto'=> 'Chek-up +Bh','precio'=> 600],
          ['nombre'=> 'Cirugias Gra. Orejas', 'nomb_corto'=> 'Cir. Gra. Orejas','precio'=> 1800],
          ['nombre'=> 'Cirugias menor Oreja', 'nomb_corto'=> 'Cir. Mnr. Orejas','precio'=> 1500],
          ['nombre'=> 'Colesterol', 'nomb_corto'=> 'Colesterol','precio'=> 70],
          ['nombre'=> 'Complementarias', 'nomb_corto'=> 'Complementarias','precio'=> 25],
          ['nombre'=> 'Consultas', 'nomb_corto'=> 'Consultas','precio'=> 200],
          ['nombre'=> 'Copias/Platino', 'nomb_corto'=> 'Copias/Platino','precio'=> 1],
          ['nombre'=> 'Copro Bovinos/Equinos', 'nomb_corto'=> 'Copro Bov./Equ.','precio'=> 60],
          ['nombre'=> 'Copro felinos y Caninos', 'nomb_corto'=> 'Copro Fel/Can','precio'=> 100],
          ['nombre'=> 'Copro Ovino', 'nomb_corto'=> 'Copro Ovino','precio'=> 60],
          ['nombre'=> 'Creatinfosfokinasa', 'nomb_corto'=> 'Creatinfosfokinasa','precio'=> 70],
          ['nombre'=> 'Creatinina', 'nomb_corto'=> 'Creatinina','precio'=> 70],
          ['nombre'=> 'Cultivo bacteriologico', 'nomb_corto'=> 'Cultivo.Bact.','precio'=> 500],
          ['nombre'=> 'Cultivos de leche y antibiograma', 'nomb_corto'=> 'Cult. LecheyAntibi.','precio'=> 350],
          ['nombre'=> 'Cultivos y Antibiogramas', 'nomb_corto'=> 'Cult. Antibiogramas','precio'=> 350],
          ['nombre'=> 'Curacion general', 'nomb_corto'=> 'Curacion general','precio'=> 200],
          ['nombre'=> 'Dict. Externo', 'nomb_corto'=> 'Dict. Externo','precio'=> 35],
          ['nombre'=> 'Envio Teapa', 'nomb_corto'=> 'Envio Teapa','precio'=> 49],
          ['nombre'=> 'Envios de Paqueteria', 'nomb_corto'=> 'Envio.Paque.','precio'=> 350],
          ['nombre'=> 'Espermatobioscopia', 'nomb_corto'=> 'Espermatobioscopia','precio'=> 400],
          ['nombre'=> 'Esteriliazcion perro chico', 'nomb_corto'=> 'Ester.Perro Ch','precio'=> 2000],
          ['nombre'=> 'Esteriliazcion perro grande', 'nomb_corto'=> 'Ester.Perro Gde','precio'=> 2500],
          ['nombre'=> 'Esterilizacion gatos', 'nomb_corto'=> 'Estrt. Gatos','precio'=> 1200],
          ['nombre'=> 'Examen de Orina', 'nomb_corto'=> 'Examen de Orina','precio'=> 100],
          ['nombre'=> 'Exudado Vaginal', 'nomb_corto'=> 'Exudado Vaginal','precio'=> 350],
          ['nombre'=> 'Fijacion de Complemento', 'nomb_corto'=> 'Fij. Complemento','precio'=> 70],
          ['nombre'=> 'Fosforo', 'nomb_corto'=> 'Fosforo','precio'=> 70],
          ['nombre'=> 'Globulina', 'nomb_corto'=> 'Globulina','precio'=> 70],
          ['nombre'=> 'Glucosa', 'nomb_corto'=> 'Glucosa','precio'=> 70],
          ['nombre'=> 'Hipoteroides', 'nomb_corto'=> 'Hipoteroides','precio'=> 365],
          ['nombre'=> 'Inyeccion general', 'nomb_corto'=> 'Inyeccion general','precio'=> 50],
          ['nombre'=> 'Leptospira', 'nomb_corto'=> 'Leptospira','precio'=> 90],
          ['nombre'=> 'Limpieza Dental P.Chico', 'nomb_corto'=> 'Limp. Detal P. Ch','precio'=> 600],
          ['nombre'=> 'Nitrogeno ureico', 'nomb_corto'=> 'Nitrogeno ureico','precio'=> 70],
          ['nombre'=> 'Parvovirus', 'nomb_corto'=> 'Parvovirus','precio'=> 500],
          ['nombre'=> 'Perfil Cardiaco', 'nomb_corto'=> 'Perfil Cardiaco','precio'=> 300],
          ['nombre'=> 'Perfil Hepatico', 'nomb_corto'=> 'Perfil Hepatico','precio'=> 240],
          ['nombre'=> 'Perfil pancreatico', 'nomb_corto'=> 'Perfil pancreatico','precio'=> 200],
          ['nombre'=> 'Perfil Renal', 'nomb_corto'=> 'Perfil Renal','precio'=> 300],
          ['nombre'=> 'Piroplasmosis equina', 'nomb_corto'=> 'Piroplasmosis Equina','precio'=> 350],
          ['nombre'=> 'Proteinas totales', 'nomb_corto'=> 'Proteinas totales','precio'=> 70],
          ['nombre'=> 'Quimica Clinica', 'nomb_corto'=> 'Quimica Clinica','precio'=> 0],
          ['nombre'=> 'Quimica Sanguinea 12', 'nomb_corto'=> 'Quimica Sanguinea 12','precio'=> 800],
          ['nombre'=> 'Quimica Sanguinea 4', 'nomb_corto'=> 'Quimica Sanguinea 4','precio'=> 240],
          ['nombre'=> 'Quimica Sanguinea 6', 'nomb_corto'=> 'Quimica Sanguinea 6','precio'=> 400],
          ['nombre'=> 'Raspado (acaros y hongos)', 'nomb_corto'=> 'Rasp. (acar/hong)','precio'=> 150],
          ['nombre'=> 'Recuentos de celulas somaticas', 'nomb_corto'=> 'Rec. Cels Somaticas','precio'=> 150],
          ['nombre'=> 'TP', 'nomb_corto'=> 'TP','precio'=> 70],
          ['nombre'=> 'TPT', 'nomb_corto'=> 'TPT','precio'=> 70],
          ['nombre'=> 'Trigliceridos', 'nomb_corto'=> 'Trigliceridos','precio'=> 70],
          ['nombre'=> 'Urea', 'nomb_corto'=> 'Urea','precio'=> 70],

       ];
       catservicios::insert($Servicios);
    }
}
