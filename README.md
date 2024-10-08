# pubmedhh
PubMed for Handhelds

## Features

PubMed for Handhelds (PubMed4Hh) brings PubMed/MEDLINE to the point of care through mobile devices, like smartphones and tablet computers. It allows physicians, nurses, and other healthcare providers to access journal abstracts, bottom line summaries, “The Bottom Line” (TBL) and read full-text articles (may require journal subscription). It also includes PICO (Patient, Intervention, Comparison, and Outcome), askMEDLINE (free text, natural language queries) and Consensus Abstracts to view summary abstracts. Searches using clinical query filters or without filters is available.

## Installation

Pubmedhh requires Apache, MySQL, PHP and Perl. (Known working versions are Apache 2.4.52, MySQL 8, PHP 8, and Perl 5.) It also requires an NLM/NCBI API key. Learn how to get one here:

  https://ncbiinsights.ncbi.nlm.nih.gov/2017/11/02/new-api-keys-for-the-e-utilities/

Customize the source code for your site in files include/conf.php, include/dbconnect.php, and in files anywhere else with undefined variable "ncbi_key".

To use askMEDLINE, first initialize the database by loading the database dump file: mysql -u ADMIN -p < ask1.sql

## License

Terms and Conditions for Use of Pubmedhh

Informational Notice:

This software, “PubMed for Handhelds (PubMed4Hh),” was developed under contract funded by the National Library of Medicine, which is part of the National Institutes of Health, an agency of the Department of Health and Human Services, United States Government.

The license of this software is an open-source BSD-like license. It allows use in both commercial and non-commercial products.

The license does not supersede any applicable United States law.

The license does not indemnify you from any claims brought by third parties whose proprietary rights may be infringed by your usage of this software.

Government usage rights for this software are established by Federal law, which includes, but may not be limited to, Federal Acquisition Regulation (FAR) 48 C.F.R. Part 52.227-14, Rights in Data—General. The license for this software is intended to be expansive, rather than restrictive, in encouraging the use of this software in both commercial and non-commercial products.

LICENSE:

Government Usage Rights Notice: The U.S. Government retains unlimited, royalty-free usage rights to this software, but not ownership, as provided by Federal law.

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

    Redistributions of source code must retain the above Government Usage Rights Notice, this list of conditions and the following disclaimer.

    Redistributions in binary form must reproduce the above Government Usage Rights Notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.

    The names, trademarks, and service marks of the National Library of Medicine, the National Institutes of Health, and the names of any of the software developers shall not be used to endorse or promote products derived from this software without specific prior written permission.

THIS SOFTWARE IS PROVIDED BY THE U.S. GOVERNMENT AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITEDTO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE U.S. GOVERNMENT OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.

