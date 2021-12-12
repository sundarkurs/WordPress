<?php

  get_header();

  while(have_posts()) {
    the_post();
    ?>

<?php pageBanner(); ?>

<section id="about">
      <div class="row about-intro">
        <div class="col-four">
          <h1 class="intro-header" data-aos="fade-up">About Our Company</h1>
        </div>
        <div class="col-eight">
          <p class="lead" data-aos="fade-up">
            Excepteur enim magna veniam labore veniam sint. Ex aliqua esse
            proident ullamco voluptate. Nisi nisi nisi aliqua eiusmod dolor
            dolor proident deserunt occaecat elit Lorem reprehenderit. Id culpa
            veniam ex aliqua magna elit pariatur do nulla. Excepteur enim magna
            veniam labore veniam sint.
          </p>
        </div>
      </div>

      <div class="row about-how">
        <h1 class="intro-header" data-aos="fade-up">Frequently asked questions</h1>

        <div class="about-how-content">
          <div class="about-how-steps block-1-1 block-tab-full group">
            <div class="bgrid step" data-item="1" data-aos="fade-up">
              <h3>Why should I buy, instead of rent?</h3>
              <p>
              A home is an investment. When you rent, you write your monthly cheque and that money is gone forever. 
              But when you own your home, you can deduct the cost of your mortgage loan interest from your income taxes. 
              This will save you a lot each year, because the interest you pay will make up most of your monthly payment for most of 
              the years of your mortgage. You can also deduct the property taxes you pay as a homeowner. In addition, the value of 
              your home may go up over the years. Finally, you'll enjoy having something that's all yours - a home where your 
              own personal style will tell the world who you are.
              </p>
            </div>

            <div class="bgrid step" data-item="2" data-aos="fade-up">
              <h3>How do I know if I can get a loan?</h3>
              <p>
              It is a mixture of the Value of the property and the income of the buyer. 
              Usually you can get loans upto 75 to 85% of the Property value provided you have substantial income records. 
              The Financiers or Bankers usually calculate the eligibility based on the net income of a person. 
              50% of an individual's net income is considered as the key to calculate the EMI which in turn is the loan eligibility. 
              They do have options of clubbing incomes from co-borrowers (usually only a direct blood 
              relative is considered as co-borrower). 
              Use our simple EMI calculators to see how much you could pay for a particular loan. 
              The prevailing interest rates and further procedures can be taken from our Home Loan consultants at any time.
              </p>
            </div>

            <div class="bgrid step" data-item="3" data-aos="fade-up">
              <h3>How do I find a lender?</h3>
              <p>
              It's very simple. Our projects are pre approved by several banks and NBFC's. 
              You can have a choice of financier which suits your needs and essentials. 
              Our Home Loan consultants can be contacted at any time for choosing the same.
              </p>
            </div>

            <div class="bgrid step" data-item="4" data-aos="fade-up"> 
              <h3>What is Pre EMI?</h3>
              <p>
              You've chosen a property that's yet under construction. 
              So the lender makes the disbursement in parts based on the progress of the construction of your property. 
              However till the housing loan is fully disbursed you have to pay simple interest at 
              the rate you have agreed upon with the lender. This is known as the Pre EMI. 
              And from the month following in which the full disbursement is made you will start paying your EMI.
              </p>
            </div>
          </div>
        </div>
      </div>
      
    </section>
    
    

<?php } get_footer(); ?>