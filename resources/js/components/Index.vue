<template>
  <div class="container mt-5">
    <div class="row">
      <VueCard ImgSrc="" CardTitle="Student Portal"></VueCard>
      <div class="col-lg-4 col-md-6 col-sm-12 my-3 text-center">
        <VueCard ImgSrc="images/card/img_avatar1.png" ButtonText="Open" CardTitle="Student Portal" Class="card-animation" Href="/student/login" Variant="primary"></VueCard>
        <div class="card card-animation">
          <img
            class="card-img-top img-fluid"
            src="images/card/img_avatar1.png"
            alt="Student image"
            style="width: 100%"
          />
          <div class="card-body">
            <h4 class="card-title">Student Portal</h4>
            <a href="/student/login" class="btn btn-UNi">Open Portal</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 my-3 text-center">
        <div class="card card-animation">
          <img
            class="card-img-top img-fluid"
            src="images/card/img_avatar2.png"
            alt="Teacher image"
            style="width: 100%"
          />
          <div class="card-body">
            <h4 class="card-title">Teacher Portal</h4>
            <a href="/teacher/login" class="btn btn-UNi">Open Portal</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 my-3 text-center">
        <div class="card card-animation">
          <img
            class="card-img-top img-fluid"
            src="images/card/img_avatar3.png"
            alt="Card image"
            style="width: 100%"
          />
          <div class="card-body">
            <h4 class="card-title">Admin Portal</h4>
            <a href="/admin/login" class="btn btn-UNi">Open Portal</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>

export default {
  name: "Index",
  components: {

  },
};
</script>
<style lang="css">
</style>
