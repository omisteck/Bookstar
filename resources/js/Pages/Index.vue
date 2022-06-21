<template>
  <!-- Body main wrapper start -->
  <div class="body-wrapper">
    <!-- HEADER AREA START (header-5) -->
    <header
      class="
        ltn__header-area ltn__header-5 ltn__header-transparent
        gradient-color-4---
      "
    >
      <!-- ltn__header-top-area end -->

      <!-- ltn__header-middle-area start -->
      <div
        class="
          ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-white
          sticky-active-into-mobile---
          plr--9---
        "
      >
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="site-logo-wrap">
                <div class="site-logo">
                  <a href="index.html"><img src="img/logo.png" alt="Logo" /></a>
                </div>
              </div>
            </div>
            <div class="col header-menu-column menu-color-white---">
              <div class="header-menu d-none d-xl-block">
                <nav>
                  <div class="ltn__main-menu">
                    <ul>
                      <!-- <li class=""><a href="#">Home</a></li> -->
                      <!-- <li class="special-link"><a href="contact.html">GET A QUOTE</a></li> -->
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
            <div class="ltn__header-options ltn__header-options-2">
              <!-- mini-cart -->
              <div class="btn-wrapper animated mt-0">
                <a
                  href="#"
                  data-toggle="modal"
                  data-target="#quick_view_modal"
                  class="theme-btn-1 btn btn-effect-1 text-uppercase"
                >
                  + add recipe
                </a>
              </div>
              <!-- mini-cart -->
            </div>
          </div>
        </div>
      </div>
      <!-- ltn__header-middle-area end -->
    </header>
    <!-- HEADER AREA END -->

    <div class="ltn__utilize-overlay"></div>

    <!-- SLIDER AREA START (slider-3) -->
    <div class="ltn__slider-area ltn__slider-3 section-bg-1">
      <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1">
        <!-- ltn__slide-item -->
        <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3">
          <div class="ltn__slide-item-inner">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 align-self-center">
                  <div class="slide-item-info">
                    <div class="slide-item-info-inner ltn__slide-animation">
                      <div class="slide-video mb-50 d-none">
                        <a
                          class="ltn__video-icon-2 ltn__video-icon-2-border"
                          href="https://www.youtube.com/embed/ATI7vfCgwXE?autoplay=1&showinfo=0"
                          data-rel="lightcase:myCollection"
                        >
                          <i class="fa fa-play"></i>
                        </a>
                      </div>
                      <h6 class="slide-sub-title animated">
                        <img src="img/icons/icon-img/1.png" alt="#" /> 100%
                        Local Recipes
                      </h6>
                      <h1 class="slide-title animated">
                        Tasty & Healthy <br />
                        Recipes
                      </h1>
                      <div class="slide-brief animated d-none">
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing
                          elit, sed do eiusmod tempor incididunt ut labore.
                        </p>
                      </div>
                      <div class="btn-wrapper animated">
                        <a
                          href="#foods"
                          class="theme-btn-1 btn btn-effect-1 text-uppercase"
                          >Explore Recipes</a
                        >
                      </div>
                    </div>
                  </div>
                  <div class="slide-item-img">
                    <img src="img/slider/23.png" alt="#" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ltn__slide-item -->
        <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3">
          <div class="ltn__slide-item-inner text-right">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 align-self-center">
                  <div class="slide-item-info">
                    <div class="slide-item-info-inner ltn__slide-animation">
                      <h6 class="slide-sub-title animated">
                        <img src="img/icons/icon-img/1.png" alt="#" /> 100%
                        International Recipes
                      </h6>
                      <h1 class="slide-title animated">
                        Our Garden's Most <br />
                        Favorite Food
                      </h1>
                      <div class="slide-brief animated">
                        <p>
                          We live in a big world full of glorious food and
                          cooking traditions. You can explore the world's
                          greatest dishes right in your own home kitchen.
                        </p>
                      </div>
                      <div class="btn-wrapper animated">
                        <a
                          href="#foods"
                          class="
                            btn btn-transparent btn-effect-3
                            text-uppercase
                          "
                          >Explore Recipes</a
                        >
                      </div>
                    </div>
                  </div>
                  <div class="slide-item-img slide-img-left">
                    <img src="img/slider/21.png" alt="#" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--  -->
      </div>
    </div>
    <!-- SLIDER AREA END -->

    <!-- PRODUCT AREA START (product-item-3) -->
    <div id="foods" class="ltn__product-area ltn__product-gutter pt-115 pb-70">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title-area ltn__section-title-2 text-center">
              <h1 class="section-title">Recipes</h1>
            </div>
          </div>
        </div>

        <div class="row ltn__tab-product-slider-one-active--- slick-arrow-1">
          <!-- ltn__product-item -->
          <div
            class="col-lg-3 col-md-4 col-sm-6 col-6"
            v-for="recipe in recipes"
            :key="recipe.id"
          >
            <div class="ltn__product-item ltn__product-item-3 text-left">
              <div class="product-img">
                <a href="#" data-toggle="modal" data-target="#quick_view_modal"
                  ><img
                    :src="`/upload/${recipe.image}`"
                    alt="#"
                /></a>
                <div class="product-badge">
                  <ul>
                    <li class="sale-badge">{{ recipe.time }}</li>
                  </ul>
                </div>
                <div class="product-hover-action">
                  <ul>
                    <li>
                      <a
                        href="#"
                        title="Quick View"
                        data-toggle="modal"
                        data-target="#details_view_modal"
                        @click="getRecipe(recipe)"
                      >
                        <i class="far fa-eye"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="product-info">
                <div class="product-price">
                  <span>{{ recipe.title }}</span>
                </div>
                <h2 class="product-title">{{ recipe.ingredients }}</h2>
              </div>
            </div>
          </div>

          <!--  -->
        </div>
      </div>
    </div>
    <!-- PRODUCT AREA END -->

    <!-- FEATURE AREA START ( Feature - 3) -->
    <div class="ltn__feature-area before-bg-bottom-2 mb--30--- plr--5">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div
              class="
                ltn__feature-item-box-wrap ltn__border-between-column
                white-bg
              "
            >
              <div class="row">
                <div class="col-xl-3 col-md-6 col-12">
                  <div class="ltn__feature-item ltn__feature-item-8">
                    <div class="ltn__feature-icon">
                      <img src="img/icons/icon-img/11.png" alt="#" />
                    </div>
                    <div class="ltn__feature-info">
                      <h4>Curated Products</h4>
                      <p>Provide Curated Products for all product over $100</p>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                  <div class="ltn__feature-item ltn__feature-item-8">
                    <div class="ltn__feature-icon">
                      <img src="img/icons/icon-img/12.png" alt="#" />
                    </div>
                    <div class="ltn__feature-info">
                      <h4>Handmade</h4>
                      <p>We ensure the product quality that is our main goal</p>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                  <div class="ltn__feature-item ltn__feature-item-8">
                    <div class="ltn__feature-icon">
                      <img src="img/icons/icon-img/13.png" alt="#" />
                    </div>
                    <div class="ltn__feature-info">
                      <h4>Natural Food</h4>
                      <p>
                        Return product within 3 days for any product you buy
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                  <div class="ltn__feature-item ltn__feature-item-8">
                    <div class="ltn__feature-icon">
                      <img src="img/icons/icon-img/14.png" alt="#" />
                    </div>
                    <div class="ltn__feature-info">
                      <h4>Free home delivery</h4>
                      <p>
                        We ensure the product quality that you can trust easily
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FEATURE AREA END -->

    <!-- FOOTER AREA START -->
    <footer class="ltn__footer-area">
      <div class="footer-top-area section-bg-1 plr--5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-3 col-md-6 col-sm-6 col-12">
              <div class="footer-widget footer-about-widget">
                <div class="footer-logo">
                  <div class="site-logo">
                    <img src="img/logo.png" alt="Logo" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
        class="
          ltn__copyright-area ltn__copyright-2
          section-bg-2
          ltn__border-top-2---
          plr--5
        "
      >
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 col-12">
              <div class="ltn__copyright-design clearfix">
                <p>
                  All Rights Reserved @ Company
                  <span class="current-year"></span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- FOOTER AREA END -->

    <!-- MODAL AREA START (Quick View Modal) -->
    <div class="ltn__modal-area ltn__quick-view-modal-area">
      <div class="modal fade" id="details_view_modal" tabindex="-1">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button
                type="button"
                class="close"
                data-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">&times;</span>
                <!-- <i class="fas fa-times"></i> -->
              </button>
            </div>
            <div class="modal-body">
              <div class="ltn__quick-view-modal-inner">
                <div class="modal-product-item">
                  <div class="row">
                    <div class="col-lg-6 col-12">
                      <div class="modal-product-img">
                        <img :src="`/upload/${currentRecipe.image}`" alt="#" />
                      </div>
                    </div>
                    <div class="col-lg-6 col-12">
                      <div class="modal-product-info">
                        <h3>{{currentRecipe.time}}</h3>
                        <div class="product-price">
                          <span>{{currentRecipe.title}}</span>
                        </div>
                        <div
                          class="modal-product-meta ltn__product-details-menu-1"
                        >
                          <ul>
                            <li>
                              <strong>Ingredents:</strong>
                              <span>
                                <a href="#">{{currentRecipe.ingredients}}</a>
                              </span>
                            </li>
                          </ul>
                        </div>
                        <div class="ltn__product-details-menu-2">
                          <p>
                           {{currentRecipe.description}}
                          </p>
                        </div>
                        <hr />
                        <div class="ltn__social-media">
                          <ul>
                            <li>Share:</li>
                            <li>
                              <a href="#" title="Facebook"
                                ><i class="fab fa-facebook-f"></i
                              ></a>
                            </li>
                            <li>
                              <a href="#" title="Twitter"
                                ><i class="fab fa-twitter"></i
                              ></a>
                            </li>
                            <li>
                              <a href="#" title="Linkedin"
                                ><i class="fab fa-linkedin"></i
                              ></a>
                            </li>
                            <li>
                              <a href="#" title="Instagram"
                                ><i class="fab fa-instagram"></i
                              ></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- MODAL AREA END -->

    <!-- MODAL AREA START (Quick View Modal) -->
    <div class="ltn__modal-area ltn__quick-view-modal-area">
      <div class="modal fade" id="quick_view_modal" tabindex="-1">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <vue-element-loading
              :active="loading"
              spinner="bar-fade-scale"
              color="#80B500"
              text="Please wait..."
            />
            <div class="modal-header">
              <button
                type="button"
                class="close"
                data-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">&times;</span>
                <!-- <i class="fas fa-times"></i> -->
              </button>
            </div>
            <div class="modal-body">
              <div class="ltn__quick-view-modal-inner">
                <div class="modal-product-item">
                  <div class="row">
                    <div class="col-lg-6 col-12">
                      <div class="modal-product-img">
                        <input
                          type="file"
                          class="dropify"
                          data-allowed-file-extensions="jpeg jpg png"
                          data-height="600"
                          data-width="600"
                          data-max-file-size="3M"
                          v-on:change="onFileChange"
                        />
                      </div>
                    </div>

                    <div class="col-lg-6 col-12">
                      <form
                        enctype="multipart/form-data"
                        method="post"
                        @submit.prevent="saveRecipe"
                      >
                        <div class="form-group">
                          <input
                            type="text"
                            required
                            v-model="form.title"
                            class="form-control"
                            aria-describedby="title"
                            placeholder="Enter Recipe Title"
                          />
                          <input
                            type="text"
                            required
                            v-model="form.ingredients"
                            class="form-control"
                            aria-describedby="title"
                            placeholder="Ingredients eg. Rice, Bean"
                          />
                          <textarea
                            class="form-control"
                            v-model="form.description"
                            aria-describedby="title"
                            maxlength="220"
                            placeholder="Enter Recipe Description"
                          ></textarea>
                            <input
                            type="text"
                            required
                            v-model="form.time"
                            class="form-control"
                            aria-describedby="title"
                            placeholder="Hands-on Time"
                          />
                          <div class="ltn__social-media">
                            <input
                              type="submit"
                              class="
                                btn btn-transparent btn-effect-3
                                text-uppercase
                              "
                              value="Save"
                            />
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- MODAL AREA END -->
  </div>
</template>

<script>
import VueElementLoading from "vue-element-loading";
import axios from "axios";
import { useToast } from "vue-toastification";
import { Inertia } from "@inertiajs/inertia";

export default {
  props: ["recipes"],

  setup() {
    // Get toast interface
    const toast = useToast();

    // Use it!
    toast("I'm a toast!");

    // or with options
    toast.success("My toast content", {
      timeout: 2000,
    });
    // These options will override the options defined in the "app.use" plugin registration for this specific toast

    // Make it available inside methods
    return { toast };
  },
  components: {
    VueElementLoading,
  },
  data() {
    return {
      form: {},
      image: null,
      loading: false,
      currentRecipe: {},
    };
  },

  methods: {
    onFileChange(e) {
      this.image = e.target.files[0];
    },
    getRecipe(recipe) {
        this.currentRecipe = recipe;
        $("#details_view_modal").modal("show");
    },
    saveRecipe() {
      this.loading = true;

      let formData = new FormData();
      formData.append("image", this.image);
      formData.append("title", this.form.title);
      formData.append("ingredients", this.form.ingredients);
      formData.append("description", this.form.description);
      formData.append("time", this.form.time);

      axios
        .post("/recipe", formData)
        .then((response) => {
          this.form = {};
          this.image = null;
          this.toast.success(response.data.message);
          $("#quick_view_modal").modal("hide");
          $(".dropify").val('');
          this.loading = false;
          Inertia.reload({ only: ["recipes"] });
        })
        .catch((error) => {
          this.toast.error(error.response.data.message);
          this.loading = false;
        });
    },
  },
};
</script>

<style>
</style>