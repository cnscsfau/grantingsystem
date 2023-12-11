<style>
  /* @media(min-width:320px) {
    .header {
      width: 100%;
      grid-template-columns: repeat(2, 1fr);
      grid-template-rows: auto;
    }

    .left-section {
      display: grid;
      grid-template-columns: repeat(2, 3fr);
      grid-template-rows: auto;
      gap: 1px;
      text-align: center;
      justify-content: center;
      color: #f0f0f0;
      border: 1px black white;
      margin-left: 10rem;
    }

    .left-section>img {
      border: 1px black white;
      margin-left: 5rem;
    }

    .flowless {}

    .flowless>p {
      font-size: clamp(1rem, 0.4283vw + 0.3043rem, 3rem);
      line-height: 1.25em;
      border: 2px solid #f0f0f0;
    }
  } */

  /* Media Query for Larger Screens */
  /* @media(min-width: 768px) {
    .header {
      width: 100%;
      grid-template-columns: repeat(2, 1fr);
      grid-template-rows: auto;
    }

    .left-section {
      display: grid;
      grid-template-columns: repeat(2, 0.3fr);
      grid-template-rows: auto;
      gap: 1px;
      text-align: left;
      color: #f0f0f0;
    }

    .nav-items {
      color: #f0f0f0;
      display: grid;
      grid-template-columns: repeat(4, 0.3fr);
      grid-template-rows: auto;
      gap: 1px;
      text-align: center;
    }
  }

  .header {
    display: flex;
    justify-content: center;
    text-align: center;
    height: 20vh;
    background: linear-gradient(180deg, rgba(148.75, 6.20, 6.20, 0.81) 81%, rgba(250.75, 5.22, 5.22, 0.69) 100%);
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    color: #f0f0f0;
  }

  .navbox {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 5px 20px 5px 20px;
  }

  .navbox>img {
    max-width: 100%;
    height: auto;
    border: 1px solid white;
    width: 25%;
  }

  .navbox>h6 {
    margin: 5px 20px 5px 20px;
  }

  .left-section img {
    max-width: 100%;
    height: auto;
    margin-bottom: 10px;
  }

  .flowless {
    text-align: center;
  }

  .flowless>p {
    font-size: clamp(1rem, 0.4283vw + 0.3043rem, 3rem);
    line-height: 1.25em;
    border: 2px solid #f0f0f0;
    margin: 0;
  } */
  /* Default Styles */
  .header {
    display: flex;
    justify-content: center;
    text-align: center;
    height: 20vh;
    background: linear-gradient(180deg, rgba(148.75, 6.20, 6.20, 0.81) 81%, rgba(250.75, 5.22, 5.22, 0.69) 100%);
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    color: #f0f0f0;
  }

  .navbox {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 5px 5px 5px 5px;
  }

  .navbox>img {
    max-width: 100%;
    height: auto;
    /* border: 1px solid white; */
    width: 25%;
  }

  .navbox>h6 {
    margin: 5px 5px 5px 5px;
  }

  .left-section img {
    max-width: 100%;
    height: auto;
    margin-bottom: 10px;
  }

  .flowless {
    text-align: center;
  }

  .flowless>p {
    font-size: clamp(1rem, 0.4283vw + 0.3043rem, 3rem);
    line-height: 1.25em;
    /* border: 2px solid #f0f0f0; */
    margin: 0;
  }

  /* Media Query for Smaller Screens */
  @media (max-width: 767px) {
    .left-section {
      display: grid;
      grid-template-columns: repeat(2, 3fr);
      grid-template-rows: auto;
      gap: 1px;
      text-align: center;
      justify-content: center;
      color: #f0f0f0;
      /* border: 1px black white; */
      margin-left: 0;
      /* Adjusted margin for smaller screens */
    }

    .left-section>img {
      /* border: 1px black white; */
      margin-left: 0;
      /* Adjusted margin for smaller screens */
    }
  }

  /* Media Query for Larger Screens */
  @media (min-width: 768px) {
    .left-section {
      display: grid;
      grid-template-columns: repeat(2, 0.3fr);
      grid-template-rows: auto;
      gap: 1px;
      text-align: left;
      color: #f0f0f0;
    }

    .nav-items {
      color: #f0f0f0;
      display: grid;
      grid-template-columns: repeat(4, 0.3fr);
      grid-template-rows: auto;
      gap: 1px;
      text-align: center;
    }
  }
</style>
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
  <!-- Navbar -->
  <nav class="header" id="navbarBlur" data-scroll="true">
    <div class="container-fluid py-1 px-3">
      <div class="row align-items-center"> <!-- Centering using Bootstrap grid -->
        <div class="col-md-6"> <!-- Adjust the column size based on your design -->
          <nav aria-label="breadcrumb">
            <div class="navbox">
              <img src="./images/sfaulogo.png" class="navbar-brand-img h-50 ms-md-auto pe-md-3 d-flex align-items-center" alt="main_logo">
              <h6 class="font-weight-bolder mb-0">CAMARINES NORTE STATE COLLEGE SCHOLARSHIP AND FINANCIAL ASSISTANCE UNIT</h6>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </nav>