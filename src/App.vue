<template>
  <v-container>
    <v-row>
      <v-col>
        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el
        texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se
        dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro
        de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos
        electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas
        "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como
        por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.
      </v-col>
      <v-col lg="12" md="6" sm="6">
        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el
        texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se
        dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro
        de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos
        electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas
        "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como
        por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.
      </v-col>
    </v-row>
    <v-row>
      <v-btn icon="mdi-logout" color="pink">

      </v-btn>
      <v-btn icon="mdi-twitter" color="blue">

      </v-btn>
      <v-btn prepend-icon="mdi-antenna" color="purple">
        Activar Wifi
      </v-btn>
    </v-row>
  </v-container>
  <v-toolbar color="blue-grey darken-4">
    <v-app-bar-nav-icon color="white"></v-app-bar-nav-icon>
    <v-toolbar-title>Vue</v-toolbar-title>
    <v-spacer></v-spacer>
    <v-btn icon="mdi-logout" color="white">
    </v-btn>
  </v-toolbar>
  <v-card elevation="24" max-width="444" class="mx-auto">
    <v-carousel :continuous="false" :show-arrows="false" hide-delimiter-background delimiter-icon="mdi-square"
      height="300">
      <v-carousel-item v-for="(slide, i) in slides" :key="i">
        <v-sheet :color="colors[i]" height="100%" tile>
          <div class="d-flex fill-height justify-center align-center">
            <div class="text-h2">
              {{ slide }} Slide
            </div>
          </div>
        </v-sheet>
      </v-carousel-item>
    </v-carousel>
  </v-card>

  <v-btn @click="snackbar = true" class="ms-5" color="error">Abrir snack</v-btn>
  <v-snackbar v-model="snackbar">
    Mensaje
    <v-btn>Cerrar</v-btn>
  </v-snackbar>
</template>

<script>
export default {
  data() {
    return {
      colors: [
        'green',
        'secondary',
        'yellow darken-4',
        'red lighten-2',
        'orange darken-1',
      ],
      slides: [
        'First',
        'Second',
        'Third',
        'Fourth',
        'Fifth',
      ],
      snackbar: false,
    }
  },
}


</script>
<style>

</style>
