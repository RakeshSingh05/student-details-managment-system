<?php 

// include autoloader
require_once 'dompdf/autoload.inc.php';
// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$html= '<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Result Structure </title>
  
  <style>

    *{
      margin:0%;
      padding:0%;
    }
    body{
      margin:20px;
   
    background-repeat: no-repeat;
    background-position: center;}
    
    .blue{
      border:2px solid rgb(19, 19, 73);
      margin:2px;
      height:140%;
    }
    .green{
      border:3px solid green;;
      margin:9px;
      height:140%;
    }
    .jutSemRegistrationNo{
      display: flex;
      justify-content: flex-end;
      padding:4px;
      margin-top:6px;
      margin-bottom:10px;
      text-transform:uppercase;
    }
    .logoTittle{
      display: inline-flex;
  
    
    }
    img{
      width:100%;
    }
    .logo{
      width:55px;
      padding-left:12px;
      
    }
    .tittle{
      color: darkgreen;
      
      text-transform: uppercase;
      font-size: 24px;
      padding-left: 61px;
      padding-top: 18px;
      font-weight: bolder;
      text-align: center;
    
    }
    .tittle span{
      color :darkblue;
    }
    .semester{
      text-transform: uppercase;
      font-size:15px;
      padding:5px;
      text-align: center;
    }
    .detailsOfStudent{
      padding-left: 42px;
      text-transform: uppercase;
      line-height: 21px;
      margin-bottom:15px;
    }
    table {
      margin: 5px;
      width: calc(100% - 10px);
      border-collapse: collapse;
    }
    table, th, td {
      border: 1px solid black;
      text-transform: uppercase;
    }
    th, td {
      padding:2px ;
      text-align: center;
    }

    .gradePerformance{
      padding-left:40px;
      font-weight: 700;
      padding-bottom:20px;
    }
    .marks{
      padding-left:42px;
      margin:11.5px;
    }
    .marksOfGrade{
      font-weight: 700;
      padding-left :41px;
      display: grid;
        grid-template-columns: 205px 116px 96px;
        column-gap:15px;
        row-gap:15px;
    }
    .no-border-table, .no-border-table th, .no-border-table td {
      border: none !important;
    }
    
    .marksOfGrade span{
      padding-right: 14px;
    }
    .conversion{
      padding:40px;
      font-weight: 700;
    }
    .footer{
      display: flex;
      justify-content: space-between;
      padding: 10px 10px;
    
    
    }
    @page {
      size: A4;
      margin: 20mm;
    }
  
      
    }
  </style>
</head>
<body>
  <div class="blue">
    <div class="green">
      <div class="jutSemRegistrationNo"> <p>No:JUT/DEG/MRK/1ST/2023/00475</p></div>
      <div class="logoTittle">
        <div class="logo"> <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxITERUTEhIVFRUXGRYWGBYXFRUVFxUYFR4XFiAdHh0YHSggGBsnHRgVITUhJSktLi4vFx8zODMsNygtLi0BCgoKDg0OGxAQGy0mICYtLS0vLS0tLS0vLy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIANwA3AMBEQACEQEDEQH/xAAcAAACAwEBAQEAAAAAAAAAAAAFBgAEBwMBAgj/xABLEAACAQIEAwUEBQcICgIDAAABAgMEEQAFEiEGMUEHEyJRYRQycYEjQpGhsTNSYnKCksEVJEOissLR0hY0U1Rjc5OUo/CD0yXh8f/EABsBAAICAwEAAAAAAAAAAAAAAAAEAwUBAgYH/8QAOREAAQMDAwEFBgYBBAIDAAAAAQACAwQRIQUSMUETIjJRYQYUI3GRoRVCgbHB8NEzQ1LxkuEWYnL/2gAMAwEAAhEDEQA/ANxwIUwIUwIUwIUwIUwIXmBYUxi6za65yyBQWYgAbkkgAAed+WMgXOFgm3JSnm/aPQQ3AkMzDa0QDD98kIfkScNMo5H54Sz6trUFHG+ZVNvYsvIU8ncMyn5nQg/eOJPd42eNyh94lk8LV6Ms4gmv3lTHAPzQUB38u7Rjt6tfGd9M3gXWezqH+LherwHWkfTZtIPgZWH9aUfhjHvcbeGoFHK7832XB+BFHvZu1/Vv8ZMH4g3/AI/db/hcnr9F0i4Cc/k83k+Wo/hMMHvzT+X7rB02QdT9F9f6H5tGbw5mW/XaS32N3g+7B28R/ItRTSt4K8NZxBTglo46lR1ARifgEKMf3SfTGbUz/RY3VLOcrrB2nhG0VtJLA23K559dLhWA+Gr54DR3yw3Wzaw/mFk3ZPxJSVW0E6MfzPdfb9BrNb1thWSF7PEEwyeN/BRbEXClBXuMZWVMZQvcCFMCFMCFMCFMCFMCFMCFMCFMCFMCFMCFMCFwqahI1Luyoqi5ZiFUD1J2GAC5sFq44uUhZr2jF37nLoWqJD9cq2npuFFmI57kqB5kYebSbBulwkn1W47Y1Sbg+rqB32bVuhBY92GWy9P+Wh5bgN8cZdVRRD4bf1WY6OWY94r2PNspo/8AVabv5Bb6Qi+42/KSXI8/CLb4rptQLut10FJ7OyOHeFgqlfx/WP8Ak+7hHoveN9r7f1cJGperyHQYW+M3QWTM6ydtJnqJGbYIrML9fdSwtb0sBzxpve7hOe6UtP3i0AL4zDIKiIapqaQDmWNpAPiVLafnjBjctoqylebMI+iHiJfzV+wYjOE9ZtrlQwr+av2DBdG0f0LtBKyG6O6H9F2X8CMbBxCifTxv5AKJ0fFtZGbLVM36MmmTl8Rq+++JBPJ5pJ+l0j8FqPwdoGtdFZSxyoeemx2/UkuD+9idlXblVVR7Og/6ZXy3D2UV3+qymmm5hNxZv+W56W+oR8cWMOou4OQudrNFki5bZetUZxlu8n88px1uzMo3O5sZF2HM6lHnhm0E3GCq0uniwchNXDPGlLWWVG0S2/JPYMf1SNnHPcHp0wtNTPYmIqkPTMML/NMr3GUKYEKYEKYEKYEKYEKYEKYEKYEKYEL5wI9EucWcYU9Ctm8cpF1iUjV8WP1Fv1PrYG2J4acyH+UvNUNjFkoQ5FW5kfaMxlMFMPEsQ8Ow62bZBz8T3byABBwy+WODEfPmoGQSTm7voutRxXTUiGDLIU9ZSDpJ89/FKd+ZNvU8sVM9aXHOV1Wn6ASN0mAlHMa6WdtU8jSHpq91fgosF+Q+eEHvefEungpIoRZgXAOAVuA248JvZrEHTtuQeW3ngZblSyjc2wNk1HhdqpO+poWpzca4Jbqm/wBaNrX09bEfIdWXQb8twqKPUvdnmOQ7vVduDqGGOpKmtieSWOSNVhDvYmzlhJ7oICnpv92MwtDXW5UOoVMk0YeGENBQ/KKqkpZ0WKSv1d4I2F4UjY6tHiVuYuT0v8DgYY2naETxTyx73AAdEazKgoHqK0GmkVqdO9bRIUWTw69lBsp6X2vbGS1hcRbhRRVNXHEwh2HYS9SxUczaIqWt1Wv9HKjkDzOs2A6XPU2xG0NccBWM0tTANz3j9R/7V2v4bpkhSVqippw5YBZqfWy6LjxCICw2ve9iCDyxl0LG5JS8GqVDnFoaHH5o3TLFK0NPTyU0tH3eiSIMqy6zf6QBhquCAb3BuSdzbEoLSQ0cJCQyREvkBDr4PT5YSNmFBJBI0UqsCpIBItrUEgMOhB57ddsJPY5rsrqaapZPHuaVWZQeYvjUEhMEAjIR/JOL6qmsNXfRj6khJIG3uvuR87j4YnZO5qqavSKeYXb3SjE2VZdml2gPs1X7xFtJJG9yoNn6+NTflv0xbU1eRj7Lj6/Rnw9LeqmX8V1mXSLT5mjPGdknF3Nh1vb6UDYkWDi+4OGnQMnG6LnyVW2Z8R2ycea0Wiq0lRZI3DowurKQQR8sIFpabFPNcHC4VjGFsvcCFMCFMCFMCFMCFMCFMCF5gQkjjTjQwt7LRjvapvDsNQjJ9PrP1tyA3bbYtwU+7vPwEnNP+VnKFZfkcGXqKzMX76qc6lS+sh+e1z435eM7LtawFzrU1oaNrcBM6fpj535yUAzrPp66RVkdY4ywCxltMaeRdvrn4i3l54pzKZMErt4KGGhi3kXKr5nkdRARqjLqxASSMGRHvytYEg+hG/S/PEboXN+Snh1KF4ybehwrMeRBNPtchjZraaeId7UyX5CwuEvyufuON2QWy4/ol5tSLgexbceZwB/lGXzWnoljMUUcUyy/TRkiebuhcEtItxG1rHTfrYYm3NZwFVCKarcbuuLc8D6LjXSNTZvHK0jPG7BkZnZgIp/AQL7AKxBsOgXGC4tlv0TEMbJqFzAO8Of0VIQ+y5sFGwWoW3ok/L7NdvliO22Xupov7fTbjm37L5rauSjzKZ47XWRjpPJklAe23K9wQR1HxBw52yQmykp4GVdE1rj/AEK9lteahs0nK6DJTE6b6rWRk5kC58IPLriRjt4c5JVVP2DIY73sUKyHNEiiqYZGeMTooEqKXMZW43UblTqttvz5XuIontF2kp+vpJJHMlaL26JtklZPYKeGp0wxxiomkbwF4002BDbgNdrr0+QwyMWF8KgDO0Ej3N717ADzQThwQyZlNUooWCESTi4AttpBt0v9I3ptiOOxkLhwrOsL46NkL/EbJanq3lYvIzMWLNuxbTrJawuTYC/IYWc9zslXUEMcTAGhfVFAJJFjMgj1nSGZWYBjsBZfMkC/S+Bo3lE8xijLwL+iZc/yymo+6imppGUqO8q1dlOs3vpABU23OlrXFrA4Zc1rBx+qoqaqqKnc9r7Eflsl/NKB6eYxlrlbOkikrqU7q6kG4O1tjzB3Iwu9uwq3p5m1kVyPmE0ZPxZHMnsuZKskbbCUjl5a7e6R/tBa3PbnhyCqc3KodT0NpaXRi48lxqKSqyWTvqcmeic3ZSfdvYb22VuQEgFjsGF7E3LXMqW58S45zX0zvRaPkmbw1UImhbUp2I5MrDmrDow8vhzBwjIwsO1ydjkDxdqIDGikXuBCmBCmBCmBCmBC+cYKx8kk8e8WtCRSUnjqpLDw7mMNy/bI5A7AeI7Wu5Twbu+7gJWeb8jeUOoaOHJ4O9ltNWyg2F77ncgE8lB3Zjux+QENZVi3on9L0p0rv3KS8wrpJ5DLM2pz16KPzVHRfTrzJJJOKV7y7ld/T0scDNrUS4bpml1qKeneO4Mk04IWIbbBgefWw6ncgYmhDiDhVupv2OBY836AI3X5wuWVBgpqbRHdXkLM7mVT/swWsoG4v5i1hzMrn7AGgJCGldWxmR7rn9kH4gpDS1KVNO945T38Mm7eIi5U33PMmx5g26YhlbsduCsKB7aiB0EgyMFXMyzWlnijLSmK92qaaGAgzyXBJ1DaxO92J2PmNpHOBbdKQ0c8Ty1rL+Rvwh/EGf8AtcUaNCqNGz6WU7LGdgluptoudhdARbpFJNcYCeo9OdTvJ3XBGVSzPM5Z5e9kI1gKAVGm2i5HIkkgkm9+uNHPLjcpyCjihZsHCpz1OpizuWY8yzFmNtuZJJ2xoSSVKxjIhtZYBfNwehPyP8BjObIL473JChkXqbfHb8cFitw5m7BX3JKXtqYvYWXUxbSB0FybD0G2ArSONjMtAurdJmTxxTQqFtOArsQdVhfYW2tYna3U42EhYLDqoJ6RssjXuPh6KnjQ+acyRY8Jh4Pp0VpK2YfRUy3A/OlOwA23IBHzdfLDEI5cVTarKX7aaPly+smardZqlpYFhdz3q1LfQys1rqBba2w1DyAsbWxuxxdk8JasZBERC0HeB06Iln2SSTU0Lw07IYA0ZiY6n0bH6Nv6ZBbw+l9r7Y2kjuMKDTqtkErg84PX+8JKBuMJWXUXFvRMvCfFJp/oKjx0reEgjV3QO3I31JY7r5Xt5YZhnLDlUWqaQJ2l8fP7qxmdDLlEwrKL6Sjk0601XUA8gT5b+F+l9JuCL3zJG1DNruehXBSxvpn3bx1Wk5RmkdTCs0TakYfMEbEHyINxb0wi+MsdYp2N4c24V7Gi3XuMoUwIUwIUwIS1xxxMtDTlhYyvdYlPn1Y/orcH1JA64nghMh/dL1MwjZcJW4foVy+BswrQXqpb6Va2sF7nTvyduZP1QLC1jfasqQ0bW8BS6bp755AepShmFbJPK0spu7c+dlA5Kt+Si/L4k3JJxRPfvN16NTU7KePY1VzjThT2G3CaqfMIayBqKRI6YDS9OQx0alFtLk21Ekk7jkT9YXLTXte3bwuempJaWQVA7/midRlImy+GOeeI1Sd73Th9QZYzcoW21DSFBPQi5vbEjotzc8pSKrMVU58be6bXHzShHm7+yGlKqyFxIpb3ojzOm23Mk3vyZud8LB+NpV97mztxODnqPNU40ZmCIrOx5KoLMfkN/n0xEASbJuSSNjN5Nk2ZT2f1MljMywL5bPJ9x0r9+GmU7neJUlTrsbMR5+yZqfgrL4BqmGu31ppPDf8AVuF+VsTNgY1VEmp1UuGn6Izkwo2DeyiAhTpYxBLBrA2JUWvYj7cStskpXTg98lVG4qiBI9nq9tv9Un+HReWMblkQEjkfVcTxhS3CypPGWvpElNMNdvKym/4i++MGRimZRykF0ebeRQDN63LpZY2RaWWEnTMFUJMmshVkBuG0hrA9RqviMlhTcLKpgIJId06oXn+T0KTSRRSToYwDIe6eohjuL+IjxLt1vYX+OI3Rs4Cfpq+qDWvkAIPGbIRmWRVECiRkDxEXEsR1xkHe9wLqLWNztvzOITE9uQrGn1KKY7b2PkVTFW/dd1rPdFg+i406hfflf1te1wDz3xpvPHRN+7xmTtbZRrhiMVP8ymUmAM0+sSd2YiAQf1gbnbmCSfUTQHcC1VOptMThOzxHHF1zz3M3qJO8pgyU9KEWMpt3SHw95a99wD0PhG9rnA5xce70RTU8cEO2cd56P8QcOipMklOjCSMREyMFWKs1qDdCCBr5AkAAkgeomfCCMcpCh1E05DXcfskXqQQQQbEEEEEbWIO4IO1jhKxabFdQx4cLtTTwXxCsX80qLNTSXUat1jL7aTfbu2uR5D4HZmmn2usqDWdNbIO0aM9fVdInfJK3SxLUM5uCbnRyF/PUotf85bHciwvjaoj/APsFwgvTyZ4WpxuCAQbg7gjcEHr64rrWwVYg7hddMCypgQvMCFxqp1jRpHIVVBZmPIKu5P2A4ACcBalwGSsx4eiOZVsmY1A000BtGrcvB4gD6C4dt7aiOgOLGZwgj7Mc9UjAx1RJnjogvE+eNWTmTfu1usS+S/nfrNt8AB8+cml3n0XpGm0QpYs8nlVMry6Sok7uO2ylmZjZUUdWPQX29fkSNGMLj3U1VVTKZnf+ipo1wCMa+h5U4I2gr0jBe3KzYkAFd6uraRYkbTpiUoigWABsSTubsSBc+nLnfdzyUvBSsic5w5PKJZJw3NUI0ulxCoJ1KoLy6bnTEp2Y9ATYX898SRwFyTrdUjgJY3Lv2TxwxX0EGmFIZaeVyBaaJxJIdx71iG5HkbD0w0yzTt6rnallTMDKTcDyOFa4wqpY9OmqMKvaNEjiDyyStewDOdKra3MefiGNnkg4Kgo2tc6zm3tzlIWXqzyUdRNGZg0jU8mtnn1ubrq0sCEAv9XbwHCrQ64JV7PsjZJE11uCE79nVLNDBLDLGyiOZwhYEakPUX5i9zf1GGImECxVRqUrJZRIw8hA+JqY95JDLmcCAuJEMkjJNArfVAVgGFthf/8AeJPdpJOOFpDqdPBbGRyPNW4+H3aQVNHJFURC5g7yaUrA5urlbFhICQdiRY9caPgcx2eikj1GORlndeSOqBQZDMFpIqiFwGnmnmLKGVVQDZmW4AZQ+1+uIWsOLhWTqyNzpHROzYAKvkFUF8cRnWSdpHSOBI5EEKEqA6NYMt9Y238OxBxiO3Pmtqppda9iG262yfXomHhbiWKmApHUlEDN3qh7RqWJPeJIA8IBPI6gARviRj7HaEhVUjpB24xfp/hXeIOCIZx3tKVjdvELfkpL78hyvt4l+YOB8Idws0WrSwnZJkLN6ykeKQxyoUdeanyNxcEbFTuLjY7jzGEnMLDldTDPHUR7m5RbhWuETVF2RS9O4TXp0s67gG+xvc7H1xLC4MJ80hqsDpAzaODlWYKiqr00a4aaCALIxVTEiHcqfevcEE8wBa/O2JA58nXCWfBBRW3Dc5y65tQPUqZBpkqEQOXi3jrIR4e8W3KVbFSvM2tuCtiRm7jlR0dYKd+x2Gk8eR/wlXYjzB/jhQixwujNrC4T1w7OmY0j0FQ30iC8UhF2sNlbfmykgHzBHmcWdHUlhFuVxWu6YGkvb4T9lZ7M84dGfLqnaWC+i/VRzUX5hbgjzVh5YsaqMECVvBXOUshHcPRaFhG6eUwWRdTAULPO1HMnkMWXwbyTspcfo3soO2wLAsT0EZ6HD9I0M+K7hI1T9/w2qpxnOlJSxZbAdtIMp6lb339Xa5PwI64q62dznX811Ps/QZ7Q8BJQBJAUFmJAAHMsdgPiSQMVwFzhda97WNLndE75FC8Mvs1MwMkKmepKsqmeWxCwAtyjFwCbbehJw8wBvdauUrHds3tZOD4fQef6odPl9OyTxyt/PkjkqpJEYd0jXP0VgbCw0g7X3ve+NTGLG/KZiq5o3NLPAcAfz5pYHLCdr8rpOBlNnBPCXtNp5wRB9VdwZbdT1CA/vfDmzDDflUOq6mYvhR89U15/xVFA60sLxrKbKWbaKnH6VvrW5JcdL2G+GHPDBtCpKeiklBmcLgfUpFgWSZmVSxrkYzwzeIe1IpIt4tgLAlbeGwt53gFzx4lcOcyMc/DIsR5LS4Z4KkdxULC8yKjywEpL3bEevkb7+o88OmNxaC4LmTKGuIY5JvahX1NM8MdPKYYHRhpjAQ6kYX3A1AWZNgRyOLCgijdcEcKsr55BwV8dkuenVJSyMSWvLGWJJJ2Drcnfo3zY43roA2zmqOhqCe65LHaFNqzKoPkY1H7KJ/EnDlE20QKTrX/GJCeeyyvVcukMjWWGSUkn6qWWQ/LxMcV1a0mb5qwopR2WVnlTxPVGokqUmkiLsW0q50hRsqlT4WsthuPM4sG0sfZi/RV5q5N5IK1/KcpEsNLPUf6wiK5kT6M3ezMpCWBUk7raxPTFHIxu8gLooqiURWJ55S8MrlKT1dFVid5ZgXeNY2buU2aJNd11DY22BCr57wPhdG4qyir4Zgxjhht+vVDKLO5qR3dE0U4ZUELpJF30jEkmJGF4SL3K+7t0LbRbyOE+aWKdrW37x6+Q9fP06/dFMl4fFbSfTVMkkl2vrAMlNOD4gL2IXleNtiACLXxvs3jvJR9U6lmvELD7EJIzPL5KeVoZlsy73HJgb2Zb8wftBBwk+PYcrqaSqZUM3A4RLhRFd5opnRad47zanKGyG6shHVWsTfbf4Ykp9pBucJHVQ4Br2DvA4V4Z7KxSkypGWNDcEi7yG+os+r3Iy25vYm9tr2xJ2h8MXCSNE0NM1Y7vHorfEVDQ0ymaSnaZpH0yCKayU0mkMwFiCCblhcfu3GNnsa0XKipKiqlIjY+1uLjlLlQr0VXeJtRjKyRty7xHFwD8VJU8t7nbEH+m/CuWba6lIfz/ACEw8cC602cUmzLo1/A7DVb1Jjbfkw8sX1HKJGGM8FeeahTup5D5haHk+YpUQRzJ7rqGHpfofUG4+RwpI3abKWJ24K9jC3XOaQKpZiAoBJJ5ADe/pjAF8LBNhdZlwMwqKurzWbZE1CO9vCNI8uqxaR+22H6oiOJsf1SdHGZptyVMxrmnmknf3pG1W/NXkq/JbD5HHOPeSbr1ClgbBE1g6I3wdDHGXrajV3UJCqQpb6R7AtYA7Irc/X0tiaBgALiqzVpnOtBHyeVzqaFaUioXuK+GW6q8gvpc+M6hv4rA7jyOw6hBZ3uVpHJ74BA7uFqo1+cPIndLHDDFcExwpoVyNxq/O336fPbGj5iRZP0+mthdud3j0v0V3g7h41k3jB7mOxkP5xO4T5jckdNtr3wQx7zfooNVr+wZsb4injjDPhAq0lO8cczqbFmCJCig78rBjayjz35DDkjwO6FztHSulJleLtH3/vVLGVwmtjSkTTTPBpleF4XfvXuDrZiQbG4JB3JJ3IxE0F4txZPyltM8yeIOwDe1k25xlNStDIIZ2aq0se90qHa51sim30YO4Fvd232vh2DYHAPXO1b97TsFgsVy6tkhkWaFtMim4bfe/MG/MHkQefx3x0Jha9u0rmmzOY/cmXijiZ8z7mKOlbvE8XhJdiSLMAoGyXsdR8hyscKQwincSThNzTGoaA0ZXfLuzOsksZTHAOoJMjj5J4f63X5YJK9nAyiPT39SjEfZKAN6w/KFQPvY4g/ESOGpj8NB5K4VPZM9iY6tWNtg8RW/zV9vsOMjURfvNWp07HdKV874OrKYEyQ60HN4iZFt6gAMotzJAHrhtlWyTANko+kkYeEV4l4/kqqdYY4+5VhaWzBtY5aVIAspG5uATy5XvFDQhr9zjdST1pLdrcKv2aQ1DVyiCQog8U5AurINtJB2JJ2B5gXIxmu2bM8ooN5etD4u4ZedhUQyN30aWjQ6dIYMG1C+wewIudrheVsUEjCfDyuuoaxsPw3junlKRzmpgmNVIDGSBGI5ItD1oRtJ1hTZJFBFmtbfYEG2IQ54dcqxFNDMzs2Z63v4f8gpwzvLYsypFkj2cAmNmUqysLhkYHcC4KkenoMTPYHhV1LUyUU1unVZLLGQSrLZlJBU81YbEfEEfxxXObY2XaseJG7mnB4TKmcu+ijy+IU4kIBbVeR2IuSX3IAsd/e2+ryxOJC4BjFTPo+zvUVR3W6LpS5QkJkgNRHNBMVgn0Denne4icgk38fhvcb2vy2kYzlqVnq+0s8N2uHHqOqocYWFXoBB7qKGIkdWUEn4e9yxFPh6sdJHwN/UklGuz6pSVJ6CbdJFZlHo2zgX5G5DC3UnE1HJZ1lW+0NGHWlHXlWuyuseKSoy+U+OFmZfUXs1vQnS3/yYuKtu4CQLjaV21xYtFIwgSn72Sh2p5p3OXuoJDTERC3k12b7UVh8xhujZukv5JSrftYgGdx+x5RBS2tJNYybb7/SyXt62TfoRhPUJtxPqr32epQ6UO6BJTHyFz0HmTt95sMVQA4XbuO1u4pvzOrq8u7mOJSIo4x3jMmqKaSTxOSRyAI2Nxa554ccXNsAFzkDIa0vfIe8ePQIBm2bd/YLFHDGCX0RcmdgAXOwubC3Lz54gdJuFuFbUdA2E3LrkqikbMyqguzEKo82YgD5XO/pfETBuKakeI2l7jZbBTwx5dQgW1FQOQ8U0rkCw8yzEC3TboMWbR2bbBcNJI6sqCTwfsFnolFVopyEFQ8krTmZ9BaUjQpRhe6puBGPzAOVyVh3zbqrosNO1z2u7thb+cevmjvaBnLUcEdLEW76SNVaexVzHH4TZ+rkk8iStydrg4uaGnDzc9FxuoVbmjHVBeHO0ieGyVI79BtqFhKLed7Bxt1sd73OHJdPa7vMwkIa+ws5Uch4ekzOpkmCiCBnZnZbmxO5RL7M/Um1gSTbkuMvnEDdoyViOn7d244C13JckgpY+7gjCDqebOfNid2O55/AYqZJHPN3FW7ImsHdCJYjUllMGVjCgxnCzdeHAsG5SRxfwBFUBpacLDPzPSOU/pAcj+kN9974cp6t8Zs7hJVFGx/HKTuFeKDloqIZaW8uq/MK2oADS5N/ABuCoPM2BvfDs8HvBD2lJQ1HYAtcFUfjytNQtQ0nhQ37lfDEVOxUi5ubXszXsbHYbY29xj7PHK1Fa4vBTzxHRI0TZrCHMndRtGsgJWIEgmTQQbMqktblsTY3vigmjsSeoXW0FTvDYSbNPKr5HmstNUlqkQxw1cg0qkgca9IAlFv6OTYEne5W43JMbCQbpmeBksfw7kt9Pt+ir9puS6XWrQbPZJbctXJX/ALpP6uI6iP8AOndErP8AZf8AolTI7+0xFZViIa4kcHSLA3BFxsRqHPriCPxBXNfbsHXbf0R6bP6SkMgy6K7SEXlcs0YtuAik+IXJtyG+xOwxO+UM8Cp2UNRUAGoNgOAhmfyGZIavbVIDDNYWtNDtc+RZfsCgY0l7zQ9Oaf8ADe+C+Bx+qoZXXGCeKYf0bBj6qdmH7pOIWO2OunqyDtoXNKbeL2FJm1JWrsk1lcjkbWQk+fgZP+njpKf4sJb5Ly+oHZTArTcV9k9dZrx+vtOZ0NHa6giRxfmGa5+xIm/eOLCm+HC56QqO/K1iHdpNZrrdHSJFW36T+M/doxQ1J71l32gw7IC/z/hCuF4Ferj1+5HqmflyiGq+/TVoxHE27spzU5S2nLfPATNltdVRRPVPI7QvTGpu5R41mdtXdBSdQABCgAgXGHAXDIK5yRjHdxgs6/8Af75INxrND7Q0cdOkbIwJkQ7SI6K6+EAWPi3vflz32XqLXsrvSI5ez3ufjyV3s0yzvKlpmHhhXw/rvcfct/3hjNM253KDXKrawRjrynDinK6iU64mU91HIYk5H2hgVV7nw+FS1gerXPIYacL5C5+mljbh3VUuGU0QiaqpEpkpowIy3ilUKGEjE9FIttzPiO9xgiBecjK3rZWsvtfcHlEK2TL8wi7kzQyg7rokTvEPRlsbqwv+IOxIw0wSwm4VQ90UgsVkeU8PmorTSxSa0V3DTAW+jQ2LAbgEmwHMEkHli5kmLIdx5KqGU4Mu0cLdKCijhjSKJQqIAqqOgH4nmbnqcUTnEm6vGtDRaytY1UnKmMAlHReE4yscDK9GBHK5zyhVLHkoJPwG+BYedo3LGc44jnqJRKXKab92isR3YNri6gE30i5PmQLDbEBddctNXySS+gTRxvkHtlHHWRx6ahY1dlHN0IDFPMldyPgR1xZ0VSWGx4VzPCJYg4cpe7M8mpZmknqHB7kqRG2yAHcOxJswuGAHIEXN7izldLIO60YKXooo8l/K02DP6SSUQx1EUkjBrIrq5soueXpviqdEbXIVs2ZtwGoJkvZ9SxF2lAnLFrBlUKqsTtpGxax5/YBhVkO1W8+qyysDG4ATHm2XpPBJC3uupX4eRHqDY/LErm3CShldHIHjkLC3jZSUcWZSVYeTKSD94OKsjOV6DFI17Q4ZCaeHWpYUp5GUmeczqs7bpTul0F1Jseh8+e9sNRhjQPVUNe6eaR7R4W2x5roWjqaGd++Q1DolS0A03SWn8Ej7HYOoXa32322d32E3S8YfS1TQ4YGL/Pj6JR5/A/xwlyuq64Thnqe1ZDHId3pyoPn4CYST+y2r5YvdNfkDzXnGu0+yV/1T7wpmHf0cEpNy0a6j+kBpb+sDjWcbHkJWKTcwFJuTjvuIamS+0KEL6ELHHb03aT78Nyd2mA80qwbqm6Uc7qO8qp3vfVK9j6KSg+5RjnZTuN16fQM2U7Gohw7V9xBWVOhXKrFCquLq3et4gR1GnSbdbYkhdZpKS1RnbSRw/M/RFM9oaQrGZaiKFLMZKamdpVka9xoUWCki9209ee18SSBpAuVW0jqgOcGMJPAJ6BK+Z1pmmkmI06zcLt4VACqNtjZVG/nfCr3XyujpIDBCGfdaj2cUXd0KNbxSlpD+0bL/AFQuLCFu1i4/V5u0qXeQTRbEqq7DolftGpaiWhaOnjMhZl1gEBhGvjNrkXN1UWG51HDFK5rZNzktVh5j2tWITREMVdSrDYqylWB9QQCD8Ri/YWPyqBwe1a32S5UI6VqgjxTMbHyjjuo+FyHb4EeWKWukLn7RwFdUTA1m48oZU9oFVqcIICNTBXCubqCQG3axuLHFaZFXTaq9riAESyLj8WK1Xh0otmUEmR1B1XtYAnYgAW578sZEgU1PqrXDvqxF2iQlHLROrAtoW99YAupJGyX5W3t64z2oUn4tERlK/EfFstXH3TRqiXBIBZidO4FzbkfTy5ddC+6rKrUnyCwwrXCfF7QEpOzPEdTavE7hzY8y3u7HYC92v5nAHqSj1Isu16rZhxrVzIyMY0VgQdCm9iCCLsT58wBywF6jl1ORwIHCB0dI8sixRi7ubKDsPPqeQAJ+XU40tcpKGN8rwAtxoaRIo1jQWVAFUXJsB6nf7cM/JdmxgawBYRxrk601bLEFAQnvI9hYI9zYegbUvwAxf0kgfGL8qhq2Fkhsvvg2jqWqoZaaFn7uRSzCypp5MC5soOknYXPoca1L49hDjlbUjJC8ELfLYorq+NipgWeFjvH1F3VfJYWEgWUfE3Vvndb/ADxX1Iyuz0WXtKfb1C+cgr6OOnlSqEsodvyAAKiwBEisbFG+rcMOXLrjaNzGtsVpX008k4dFi3VXsi4ng9oigho4YYpCYnsdcjBgQLkDqbXuT1xtHKCQzalaqgcyMyvku4JTMRQlDzQsh/YJX+GFXCzrLoIH7mAg3TrwOnfUNdTeYYj071CP7SX+OLChdYgrk/aSLvB3mP2RLsjrdWX6SfckdRy5Npk/Fzizq23kuuUp37WWVLs5ANbmcx6SEfIvM38BjNX3Y2hbUI3yFIULXUHz3+3f+OOaPK9XjFmhM2U+zDL29q70LJU2Xut21IgttvcX1C1udsNMsIrOVDWum97+Fy0fuvubhJInaSWbuqQaSrsAJpNS3ChQLhgb8xfbl5HYtuSeFszVHujDI23f9krSnwm3ra4setvgbW288KnlXoJa0k+S3vKabu4Iox9REX90AfwxahedTO3PJ9Vbxso7Je4j4upqNlSYvqYagFQtsDbnyG/S+JYqd8nhUEs7WcrNuP8Ai6CsjQQwupRixkkVAxUKRpFiTYk3sfIfK0paaSE3cVV1NRHJYALVuHaQR0cEdvdijUj4KL/xxUym7yraFvcASB2g5IIpllT3ZjbQF5OF6WG9wL253vzvstI1UOp0ha/exKONLKltblTAsXXuBZyVFFyAoJJ2AAJJJ9BuT6YMlSNiccJmyngqpmWQuDCy6dAdQQ97k7qbgchf7sbhisoNLc8Zwn3hvhyKlUEKpl0qruoYBtN9wCTYnqRz+zEoFleU1I2IeqOYym1lPbLTBZqaUAXZJEN+X0bI4+I8bD54tNOPiaqnUBYtJRmj7TqEKFMU0YAtbu1Ki3loY7fLED6KXlTMrYrAJ2oapZY0lQ3V1V1NiLqwBGx5bEYTc2xTzXbgrGMcrZZv2sQDXTSdSJEP9Vh/H7cKVIvZdL7PuN3t+SU8pzOKDWZKWKcnTpMhFktz5qee2w64XjfturarpXzuAD9oHKMjjKpjaMdxFToWTYQspZNQBtqsORO9tr4m7Yg8KtdpcRaSH7iPVBuIY9NZUj/iuf3rP/exDKLPVppxvSsKY+yuW1TMv50Sn91iP72J6Xkqr9oW/DaUsZNmLUoliU7LLIP3bJ+CjHWBgcLrzVztpsmfs9e0eaN1ux+wSnFbqGGj9Va6V/qfqEkw+6vwH8Mc0V6sOAm7Ksvqno6aSkXU8c87m5QWvdR7xAPlt92GmhxYLLn6iaBlTI2bggfyuFdwxmcr95NGXbzaWM2B6AA2UfAYw6KZ3Kmgr6GEWjP2KWTuB62+8jC45VtKbxk+i/Qi8sWy85K9OMHKBhZ52kcLVVVPFJTorqsZU3cKblr9diPniwpKhkXiVdV0zpeFnee8P1VKv84hMYbUFOpGBIF/qE2Nt9wL2PliyjqGSX2lVr6d8RBct8yqUPBEw5MiEfAgHFBIO+Vfx95gK61UOpGXUVuCNS21Lfa4uCL9d8alZe0ELB2XSSpuCpKlT7wsSLH1FrfHC3VcVMwtkIK+cCi6LtSsBIha2kMpN11CwIvdbjULX2vgUkJG7K2HK6Wjl7qeBYz3YZI2QW0g7EWHLrzG1z5nDAIXXRRxOs9nRGbYym/VfEsgVSzGwAJJ8gN8YuixKkMgZQykFSAQfMHe/wCGBFrLM+2lxekH/PPy+iH8cWmm4LiqrUsgAJaj4BzJh/q4W/50sQ/BjbDJrYgCEq2hkJutkyCkaKlgie2pIo0axuNSKFNvMXBxSvNyVeRtsERxqtykLtYX6KA/8Uj7Uc/wGFqnICvtANpiPNJGS1sUDvNIod0QmFSLqZSbAm3l0v69bYWjcG3ur3UIZJgGMNgeUXz+Wc5f3lTUR1AklhMLIF+jbxFwSoAG1wBvy+WJnC7bqppxEKjbGNtgb+qo8ZC1fUfrJ98aHEM+ZbK10s3pWX9UT7MT/Pm9YW+5o/8AHElMe8kdfHwWpNzgfzmo/wCfN/bbHZQtuwFeWVDrSFPvZxFc5pH+mR9pnX+GKmvy1v6q60zEh+YSLB7q/AfwxzRXq44+ibcqyqoqaCJadwvdzzayZGjFmFx7u53I29cNMYXRixXP1NRHBVv3i9wP5Xy3DjR29ozSKK97ATSMWtsbanW9jty2P2Yz2R8RctfxCNxAZFlKjN4b+W+3pv8AZthUCxV+8gsJHkv0JE1wD6D78WoNwvOXCziF9HAVr0QXiniBKKHvnR3uwRQoHvEEi5JAUbWv6jnyxLFEZH7Qo5pOzbuWQ8U8Wz11lkVEjVtSxruQbEXLnmbMRsAN+XXF1T0jYs3VHUVbpcLUezfMBNl8O/ijHct6d3sPtXQfnipq27JCrikfviCZWawv/ifw3OFrpgmyyDjHPVqZvAgWOO4BK6XYn3tV9wLjkRfY38hE8rl9RnEj9oCAAg8t7fdfbpyFzjS5VbsdyRhe4LrUcq5SyPBLG8kbWBWURsWjEgHI7ix6dOljtjbgp2F76dwc4YWxZHm8dTEJY/gwsbq1gSu43tcbjE17hdTTzNmZuahXGlSzQyQRe8Y2kk57Qre42+s9io+DHpjDxiysaVrQQ53CY4mBUFbWtcW5WOMjhLOuDlYx2o5h3mYFVO0KInQjUfpD6bakFj5HF1Qt2x/NUddL8T5I3w32mOWSKqi1liqLJEPESxCi6E7m55qfguIJ6AN7zSpqevvZrgtQxWq1UwIWf9rMngp183dvsUj+9hWq4XQaA28jj8kkZTmCwOzNBHMCttMltK73vuD8OmFmP2lX9XTGoaGh1rIxDxaSojShpArup06DpLMQoNrAE7gXxM2bNgOVVP0kBpeZCSEP4rk1V1Sf+Jb91UH4g/ZiGW+8lWWmttSsRnsvX+eOfKE/e6/4HEtLyVXe0BtC0JNzCMvPOw6zTfe7H+OOzgdaMBeXVAvISn/gYmPNsxhP1iz29A5YfdMMVNRmJhVvTd2UhI0kJRmQ80Z0P7LEfwxzbhleqQO3xg+YTNw2tM9FKtVG0ka1MLWDFbGUJEGNiLqCTf8ADDEVuzsVRaiJWVLXMOSD9kWpKDQtNl8sEWiRqzVqP0gRXLJIhHumxHPc7ct8SgBtmgJF73SF9Q12Rb74STm0yyTTMqBFZmCqBYBR4enIm1/iThKQ95dPSNLKYNdkrZeEqvvaKB73JjUE+qjSfvBxZRm4XEVsfZzOb6oscbFKdEI4qyj2uklgBAZwNJPIOpDLe24FwL9bXxNDJ2bw5RzR9o3akmh7KRsZ6onzWJAv9Zyfww6/UXHACrxpzRkoV2f5wtHXSU7SK8MrmMSA3XWhIRttrMDpJHXT0xJVMMkYfZaU0gjl2XWxYqVb2vlDDkNN33fdwnebnVbmTe58ibX39cYsFD7vG524hUeMcsmmpTFTpHcldQY6TpQ6gFsLXJA5mwF8YICiqoC+PYwJOruz+pRdSOkllLFQGVtQBOleYa52uSOeIjGqh2kPa3BynekyZJKKGCpjDaY4wyk+6yqBsQdje4uD5+eJtt1csgaYgyQL7yLh+KlMhiZ9MhB0s2pUtceHy58zc7DyGBosswUzIb7eEn5hmFsxhDXKyzTq4J2IC+zIB6DxNbzkJ64ge47wF0kFNupHO8rW/co7Hnq0mVRzSbskaxheWuRRoA+ZX5C56Yap4zIQFSVrxCXEpA4M4YXMe/kmqCsga9lKFiz3ZnYEboSQBY8wfIYt6iodBtDRhUkFOKglzimTI+zdqerimadZI0Ja2go2oA6epBAJv05D5LS1pkjLbJmGj7N4K0fFerJTAhZb2pVWqpijv+TjLEesjW/BPvwlVHC6r2fZta53mhPCuSyTzRv3JeFWbUbrpLIpcKbm4BbT0I6Y0ij3G6b1KtbGwsDrONkao6laqWm9uiqI6mN7KqRusLWYSC9wQAukb3udN9xbE4s9w3DhVEjXQsd2LgWnlKOZTCSeZxyaWVh8NRt91sKSEFy6OiYI6drSm/suQBqqU8lRB/bc/dbDNI25VF7RSYaPmh3Z5kXtNM8jc+9YXN9/Ch/EnHRyziN21cA2LeLorVH2fiNGJstQgB6XLKUA9fFEnzIwsO/TfJNE7Kn5pc4vpe6rqhehfvB/8gDf2tQ+WOenHfK9K0mTfSsVGlrSkU8WkMJ1RSSbaTGSwYWBuRfl523xq1+0EeammpxLIx9/Df7rlPUu7947uz8tRZi1htsb3AsTsPM+ZxqXEm6mjp4oxsaMLkBjHIU3GFpPZXX6oZICd421AfoSb/2tf3YepnXbZchrkBZLv807TKSpAJUkEAixsfPfY/MYZHOVRHLbBYvmPF+awSyQyVPjjYqfoYd7bgi6cmFmHoRi4hpYJGhypZqqaN21D6/jCvmjaKSpJRhZgEjS46i6KDY8iAdxcHYkYnbSQNNwFA6rlcLEoEV2t05YZtiwSu43uUxRccZkqhRVGwAG8cTHbbclSSfUm/zwr7lC7KbFdKMXX3/p9mX+9f8Aih/yYx7jCOQs+/T9SrVDxVnM1zFI7gbErBDYE78yoF7b28sRyQUseHKeKepl8Ctfyzn/APxf+jT/AOGNBFSc3UtqzqPsuc/EGeIpd2kVVBJPcQ2AHU2U7D7sZbFSk2C0e+ra3dbCH/6e5l/vX/ih/wAuJzQw2uAlvf5vNW4q95no5tPeSd6xIFlBmXQWvYWVTaOQ2FgGfyxQVsJjmAZ+i7nR6hk9BIXmxsgvEGbPO4XWWhiusQ2AIFgX5AksQWudwGti/o6cRx+q4mvqjLIVSy+tkhkWWFyjryYW69DcEEHyIty8hhh7GyN2uCTjldGe6Uc/09zL/ev/ABQ/5cLe4xDomff5SeU8dmuZ11V3k1RNqhX6NB3ca6n2JN1UGyiw8jqPlivrWQxnazlWNJJLJl3CfDhLonuqw3iKv7+rmlHul9K/qJ4Bb42J+eKyR4Ll32nQmKna3qq9JXzRfkppI/RXIX7OV+W9sYa8tGFNNSRSndI26NZbxrWRsDJL3qWbwssYNyCB4gBsDY/I4kZUGyr59Ip3s7gsUtotgB9//vriA5Kt2gWA8k6ZO3cZJVzcjLrVT+tanW37Vz88W2nx3IC4f2jmvIQOiZezGj7vLYtrFy8h/aY2/qhcNVbvilUdKy0QQXtchaP2WsT3oZLHbztIt/S8ZH7eJaM3uw9VFVtyHeSq9pUKuaarTdJU036f7RPtBf7MU1Wy2V2Xs7PcOZ9ElnCYyV05Nh3UXjo4I443qNZaQXADFVUGxHugk2BUknYXFgd7TBoAHqqp9RNI89lwFTzSi7qTSCSpGpb21WJIINtrhlO422GNHt2mycpKjtWm/Kt8KZr7NVxyE2Q/Ryfqvbf4K1j8L+eNoXbXJfVKXtqcjqOFtoxZcBcMRlZ/2o8MGVPa4VvJGLSKObxje/qy3J9QSN7AYfoanYdpVdXU28bgsnvfFyDdURbYrzG17LJR7J6WF0QBYZJmL6lmlmjsFuRpCELp0gksSSDcbWF6mumqWG8fhXQ6TBQyi0x7yseyQ/mZf/3s3/2Yq/xGpHVdB+CUTuh+67DQE7vRlpQMXANVI1mYKCbl7i4VduWwxBLUPl8aepaSKl/0bj9P8hfHdRf7PLP+5f8Az4g236fdN7ic7z/4j/C6QMiElEywEqy3FS97OpQ28exIJF+l8bsc5puP3UUze2ZskcSP/wA/+lXFJD/s8v8A+9m/+zDY1CptYFVp0SiPDT9CvutlEVO6j2dO8QmMQySTF+8dI5DqbUAO7SReYtci3iw1SiaeUPeMBVmpupqSndBCcnlLGL8iwuuPsBypgNyLrAtdXslyqSqnWCIeJty1riNRa7H0Fxt5kDriGeYRsuUxTwmR+Fv2U5dHTwpDELIgsPM9ST5km5J6knHPPcXncV0bG7WgBB+O839npG0m0kn0cfmC3Nv2Vufs88QTPsFaabTGacDoOVj+wHoP4YrSSu4Nmi6NDJo1KpJMyysNlCAgHnbc6ntuNudiBcg4n7IHlVfv0hJc1uB6oXUQsjsjWupsbbg9bjzBBBv5EYicAFZRStfGHjhcWvbbc9B5k7febDGoC2c7BcU59oEZhoqLL495HKCw+sVsvTzkdT8jjoqFu0bvJeXarMZZfmVpNBSLFEkS+6iqg+CgAfhhZx3ElStG0WVDivK/aqOaEe8y3Te3jWzrv0GoD5Y2hfseCtJmb4ykXho+3ZNJT/01OfAD723jj+G2qP8AZON9Rh72OCmNErOylafLlJqtcA4oeq9HxayKU2aJoVJoe80WCsCtwBe1w6kXHK45jztiYPsFXyUTybxusCqdfVtK+ogDYKqgkhVFza53JJJNzuSTiJ7k1TwCFpHJ81XIxi/Cn5FitQ7Oc/72L2eQ/SxAAX+vHyB9SNlPyPXD8D9wsVxur0Jhl3jwlOZwx1VMQCsm7QOCDEWqaVLxHeSJRvH5uoHNPMD3em2y2tHWDwv+qqauiPiYs/BxaDGVUkdCusEzIwdGKspupHMEf+/O+NXtDhZ3C3Y8sNxhH6DNZJInF4+9Q96PoYLvEBZwPBa6bPYC5BfyxRalSBjbxLsdA1Fs0nZVB54zZfH8py+af9GD/Jih7R55Xce5QcEH6lT+UpfNP+jB/kxkSOPVAoYCbEfcqfynL5p/0YP8mMdo7lBoYPI/UrsMykWGSVim94oh3MG8psSw8HJF3JHV0GLLToXTuzwuc9oKmCkjDYj3vmUBrKySVgZG1EDSNgoUC5sAoAAuSdgLkm98dPHC1g7uF55PUPnO56r4kuFB0VnLaCWeVYoULu3QcgBbcn6qjzPwFyQMRyytjF3KaKFzzYLb+DuGI6KHSDqlaxkkt7xHQeSi5sPUnmTignnMrvRX9PTiIYR2RgoJJsBuSdrAb4hOEyGkmwWMcWZ37XUFwfo1ukQ393q3pqNvWwHriunk3nau40ujEEfe5PKDHEQGblWTm3bZHHzKnkZZpFkEo5hV1Ann4TqAAuSRqHhJPMWGJu0Za55VP7rUNaY28ITWVBkkZyANR5C9lAAAG+52AF+tr4hc+5VlBF2TAzyRfgnLe/rYwR4I/pW/ZtpH71jb9E4lp2XckdYnEEBaOSjVD/P89eTnDSCwPQsl1HLqZC7A+SDHQu+FT26lecD41R6BaZivCfN17g4WVl8//wCNzrUdqer589IZiL+l1kIPospxYD40HqFXk9lPccFCeNco9mq2AFo5byJ5b+8vKwsxvbyYY5+dm0r0bR6sTQ7TyEBwvyrXFley2jjlEuudImVVMfeMEViWs1yQdlXfSNzfEsbN10jWVUkG3a246q1nuTrAsRVnZmDFg66XZR/SBBvFHfbxWN7eV8byRbQEvQ6g+d7mvCG0dW8MiyxNpdDcHf7D5gja3kfO2IWuLTcKwngbMwxu6rZeGs+jq4taeFhs6E7o38QeYPXFmx4cLhcLWUb6aXY7/tGMbJThIHFvZ0kxaWk0xSHcxnaKQ+e3uN6gEHyuScP09aWYdwkKmhD8t5WX5jQS0793PG0b+TDnba4IuHHqDi2ZO14xwqeSFzDYrlBMyMroxVlNwwO4I/8AeXI7g7HG72sc2xWschYQ5qLJVQy7kink6jSxgc+Y0gtCT1FmXqCo2xz9VpJ5jXcaX7UhoDKj6rr7A/MNCV/OFTBpF/UuCPmL+mKw0M4wQulGu0Frh6+H7iPeSUSHpHAS1/1pSNKj9UMfK3PDlPpMj8vwFUVvtVDELQ5KF11Y8rAtYADSiLssajfSoJuBc3ve5JJPPHRwQthbZgXn9XVvqZTI85KrMQOe2JnEdUtycJk4b4KqquzBTFEd+9cHxD9BTYv8TYep5YTmrGRYbkp6Cie7LuFr3D3DsFHHohXc21O27uR5m3x2GwvsBinlmdKbuVzFC2PARfEQU3yWadoHFPeFqWBvANpXB94j+jFunnb4eeFJ5bDaum0fTP8Ael/RJMcbMQqKWZjZVHMk9P8A3Yc8Jhq6KSQNbudwEfkymAxCBZ0FWrswV42h1ggBozISVcg8iD6W5nDJjbt29VSx1swm7Ut7npn5G37peGFri9leAg5ChOA5KOieKKT+TcpeoO09RbQDzGoEIP2V1SEHrfFvQ0+5y4LXa7e824GAjnZjkns9EHYEST/SNfmFOyD46dz6scM1Um6S3QKopY9rL9SnDCuU1dTB0Qljj7h/2ykZVF5U8cfLdgCCt/JhcfG3lhiml2OS1TFvCWspl/lXLTEx/ndPaxOxJAIUm+41AFT+kG8hjWvprHHHRO6NqBhkBP6pHsdwQQQSCDzBGxB8iCCPliktbleiteHgObwvuCZkZXQ2dTqU2Bs3zBB+YxgPIK1liEjCw8FOeW1K1MAjapdY0UtOusd+QzEu8kj2CRCx8KAki3K9sPss4LlaiJ9LJfbyceX0S3m2VvEO9EbLC7HQGa8iA7qJBzQsLkA79DvzVkjIOOFeUVc2SzHHvBV8szGWnlEsLaWGxBuVcc9LAcx94PUY1ZIWOumKukZUMs9a3wzxPFWL4fBKB4oifEPUfnr6j7jtiwZIH8LjKyikpj3hjzR7EiRVauoYpkMc0aSIeauoYffyPrjLXFvhwtHNacEJLzTsupnN4JHgP5v5RPsY6h+9bDjK5zfFlJy0DDlqW6rsvrVvokgkHTxOjH5FSAfnhtuot6hKO053RDm7Pcx/3dT8JYv4kYk9+h6qP3GYcLrB2c5ixsY409XlFv6gY/djBr4hwgadKeUZoOymU/l6lVHlEhYn5va32HELtR8gmG6b5lN+S8D0VMQyxd44+vKdbD4X8Kn4AYSkqpJOSnYqWJnTKZsLpgL4dwASTYDmTysMF7crIBJsOVm3F/GxkvDSNZOTTDm3SyHoOmr7PPCks9sBdLpmj/7kv0SMABhPLsLpRtaEx8MRxRiKrZ5dQmMYKKrxxXGkd6OZD6uY5XHzZhbjcVQanNJITCBj9/8ApcuIKuNY/Y0SQd1Lyk7srEFv4Y2UBnUk31NvbnvyJXDwLfTaeTf27jgj6oFha1jdXqO8G5H7XUAMPoo7PJ5N1VPmRc+g9RieBm85VTqtYIIseIopVH+Vs1WNd6Sl94/Vex33Gx1soUb7qjEc8dAPgRX6lecuPby2HAWpjFerACy9wLK8wIUtjFkLMeMKKTLq1cxp1Jjc2mQcruRe/kH2NzsHH6VsWMLhMzsnfoq+UdlJvHC58aZUksa5jS+KKQAygdOmu3Qi2lhzFvQ4pqunId6rsdD1O47Fxx0SaMJcrqRlWKGvkhbUmk8ro41IxFyuoX30tZhvsbYyx5CVqaVs7bHlO1PXU80crSShl7nVYxI0p7hQrSzHkZLk6FO31rHkrwcC1cw+CWB4AFjf+2/lKFdlunQ0SyFJEaVUcAzLEthrkCeEKTyOFXx2z0V9SahcbJCLjH6+SoxuVYMrFWXdWUkMp9CNxiEEjhWMjGSts4YTzkHaG62SrUsOXeoN/wBpBz+K/ZhyOo/5rnKzRM7oPon3LczhnXVDIrj9E3t8R0PocMhwdwuflhkiNniyuYzgKJe4EYUxlCmBC8xhChwXBQEuZ5xlS0911d7IP6OOzG+/M+6u/mcRulYzkqwptNnn4Fh5rOOIOJqir2c6IukSk2P6x21nltsNuXXCkk+/hdPRaXFT945PmhCISQqgljyVQWY/AC5PLpiAAqxke1rbnCYcmy0RxCpeN5mvG6dy/ijjOzSBbfSOj+FkIIF9xvhyJm0buq5+trjKexYbDN/Vd85qo6WWfue8jqmKq2htMKjaTvApBBLhgNDA2JbfqcPcIyQOUUlPJUhpkyz+/wBulZmJJJJJJJJJJJJ3ub7kkm98KG7sroWNaxuwDhdaOleWRYol1O5sB99z5AC5v6Y2a2/dUU8zIIzITwnHiarFBSpl1IS1TNs7LbV4/CT6Ox8I8gCbiwxfUdOBk8BecapXOneT1KbeC+HVoqZY9jI3ilYdXIAsP0VAAHoPMnGk8xleo6eLY31TBiFTr3AhTAhTAhVq6kSWNo5FDI4Ksp5EHGWktNwtHtDhYrMKGd8mqjTz3eimJKuRfT01bCxIBAYAbizDyw+5oqWXHiSLHupn+ir8X8M+znv4LNSvYgqb91q3AuOcZ2s3IbDyxQ1EOw3XfaRqjZR2bzn90tYWIzcK94XWCdlJtuDpDIfdkAOrSw6rty8ifM4yHlpUM0AlGf0KbKHMjWR9xLPYu7s8ZYI0pO6QRkC8cNlF23J5dTh1rw8ZXOVNK+kfvaMdD/J9VwzXhvvC01Oqxo8rIiXAQRRI2qVm30qWjcjoQVPXGkkAJuFPS6qYxtlzbr/CXKyjlibRLG0bWvZha48x0I+HI7Gxwq5pacq8p6mKZpLTdconKNrRmRhyZSVYfMEHAHG9wpHwskbZ4uEwUHG1dFYGRZQOki7/ALy2JPqb4mbUPacqpm0WnflgsjdP2mMPylKCfNJf4Mot9uJRVBJP9nv+D/srY7TIetNN8jEfxcY295alzoUw6r4k7TU+rSyH4vGv4E4waoBbjQJCMu+yG1faPUtfu4Yo/VmaQj5ALjQ1QKaZoDG+J10u5ln1VPtLO5HLSpEafYlr/M4idK52CrODTqaHhufqhuwHQD5DEVxwnQGgYRKgyaWQpdTHG+u0jqbWRS7ELsz7A8hv8sStiLkjNXxR7tuSLY+aOZJTUscbTJUsQNEZkEJJjlZrpMpbdI9yrKdjYqSerDGtHCpayonmeGPb8hf6rjxBxK7koukMCG7yO6GGUeB9DLYSowF997Nv5DV8vQJih0sEbn8fv/hLTMSSSSxJuSSSST1JO5J8zhUuuVfMY1jdowF7FGzMERSzMbKoG7E/+8+QFydsYAN0SSNY0veeE8jusmpTLJpeslFlW+wtvbzEa7EnqbegFzSUm7/K4LWdVMpsOOitdn/DUgZq+su1RLcqGG6K22oj6rEbAD3VsNrkYZqZrfDZwqamhv338p9wp8076r6wLKmBCmBCmBC8xhCG55k8VVC0My3U7gjZkYcmU9GH+INwTiSOQsO5qjkjDhYrOsuzGbKZfY60d7RvcJJp1KFPMgb+HfxR7kXuLg7vSRsqW7m+LqEnHK+B9jwufE/CXdL7RSfS0zDVZTrMane4tfXHbqOXqOVDNTuZwu60zWRK0Mk5/dKwNxhUeq6AcXuvpHKkFWKsNwVJUgjqCNwfXACb4Wr42ubtk6pgyfiYqdFRcxtJGzsoF9ESqqoEAsE1KpNufiFvFhmKfaTdUtZpBcLw9OnzXTvUqqmnh7xpo4u+lklZGUzFiZXCobkLsqhfInnbfYuEjgo2xyUkD3kWLrADy6L6j4VMtP3iBknISQw80UTudKb7qUj3I9RgMNwtWaq6OSxy3z/vqhlZkEqIXBSRQ2nwnx7yNAp0kcmZTYgnEToHgd1WEOqxvdtdj/q641GSVSe/TSje1wuoXJta6k3uSOXnjUxOUrdRpj4XKq1NIGKmKQMo1Mpje4X84i1wPXljXY7yUwqoiL3H1X3Dl877pBMw2N1jcix3HIWtvzxsGOPRavrKdguXKS0Mqq7PGyhAjMWsLCS4Tmbm5B5eRva2MFhCyKyEkNBve/2Reg4Wd2jDyoobRrCHVJD3oJj1Ai1mIC9d2HMXIlZT3dyq6fWA29m56fyvvLGipq7u5ILqWRQ0xieSHWCL+AmO+oi/kL42YWsksQtJu1qaTtA7PUDr/KtTZyAqtNJpradniZlhV5Je7J0ENcLHEdR1DYsCRcY2MgHPKUZQue67G3Y63XjzQGuzRpAqqiwxqrKI4iQpDsJGv5gsBt05eeIHyE8cK5p6FkR3OO4/0KjiEp4YGV2pKWSVxHEhd25KPxJOwHqcbtZdQz1EcLLv4TtamyaLvJSJqxx4VBtYel/cjB5seflyAt6Sk3YXDatrBlNhx5L64S4YmqZv5QzG5ckGKIiwUDdSVPugcwp36nfDs0zWN7ONUsMJed71o1sV/CetdTAsr3GUKYEKYEKYEKYELzAhUM4yqKpiMUyBkP2qRyIPQjzxtG9zDcKORjXixWcslbkjki9RQsd7/Uv90bXPP3Wv0JFn7x1A8nJEdpTuv+VWqnIaXMENRl8io+xeIggajv4l5xsd9xsbdeeKqpoyD6rqNM13aLOyP2SZW0skLmOZGjcfVYc+lwRsw9QcVz2FuF10NTFMy7Ddccai4U1yF9xSMrBlYqw5MpKsOnMG42NsZaSCtZI2yCzxdEsv4hqInV9Wsh3k8Za7NIvd3Y8yAALC21reVpRMVXzaXC+4Atf+Fcy/iVY9eqIm0EEcQ2I7ymLOrNy+u2q4HTEgnScukOxtPXPyV6lzWm1UTNOl4ljEt45hJqVXJOq+hlLnlp5km+Nt7cJR9DVDeNvPyVqgz2IsD7RHHGYoLo0siyx6e8LASm7SSKze4wswI5b3kEjEvLRyjG07roaM6VdkqGCnLliFmYWqF2Asuwkt1xGZB9k0yhmda7eHfZCpsx10KU7MSUmJAsbd1oNrt1s7NYX2HwxC5/csrSOjcyqMlsWXf/SAiMaYrT6YY2n1ndYGDr4LAajYC/8A/MZ7bC0/Crv3F3dybfNCqiTW7uQAXZmIAsLuSTa523vzxA4km6sYYxHGGeS5jBlTAKE4LkrHHKO8O8K1FXZgO7i/2jA+L9RTYt8Tt8eWJmQl3yVVWarFALcu/ZGq3iCmoAaXLY+/qWOkvvJ4vUjeR/0F2G97Wti6p6KwucBcPXao+d2Tcq/wpwQ3ee15g3e1DEMFJDKh82tszDkAPCvTkDjaaot3Y+EpDTX77+U+4T4ynRlfWMrKmBCmBCmBCmBCmBCmBCmBC8xhFgviRAwIIBB2IO4IO3zGMjHC1IvgpAzzs/ZJPaMsk7iUXPd3sp62U76QT9UgqdtgMOx1QttlFwk5KUg7o8KgvGCN/NM5pSrD6+g28tVhcjr44yRv0xiWia8XiyFLS6jJA+xNipVcDLKne5fUJKh5KzX9bBxfflswv64qZaRzSurpPaAH/UF/VKuY5fNAbTxPH6sPCfgwup+3Cj43NXQQVkM47jlWBxqmAMnKmMI8QypjOFkcWUwYWMfqpjDjlZ5GFMZPNlqL2sVMCzx0XhYXA6nkOp+Q3PywNQ59snhHsq4RrJ7ERd0n58vh+xbaj8wMTsgcVVVOr00XBufJG5KPK8t3qZPaJxuEsGII8kB0pzvdz054sKehc5cxX6+9+AbDyC4GpzPNvDGvslIebbjWp257NLtfZbKeRJxYgRU/OXKgLpZ+MBOfC/CdNRL9GuqQizStYuethbZVv9UbbDnzwpLO+Q5TUVO1nHKYMQqb5qYwsr3GUKYEKYEKYEKYEKYEKYEKYEKYEKYELw4wUKjmmVQVCaJ41kXyYcvUHmp9Rvjdspbwo3RNcket7OZIXMuXVTwt+YzGx9NQ3I9GDYcbVh2JBdKOpXDLCq7cVZpSDTX0XfJyMiiwI9WTUh+BC4z7vDL4XWQ2omh5C4pm+RVO7xtTOeoVk3/WiJX5nC0mnO6C6s6fXpWfm+q7JwbRzf6rmKt6ExS2/d0n7cJuoXDpZW8PtG781j9l8S9m9SPdnhb4q6/hfEHuhHVPN9oIzy1V27Pa3zgP7cg/uYwaV3mpPx6H/ivtOzusPN4B+1I390Yz7qVj/wCQRDhqsp2cuBeWrjQdbIfxZrD7MbNpLpeT2ib0Z91zbKcmg/L1vekc1WTVy6aYBq+RwyzTyeAq2f2kk6Gy8i42ooToy6gZ3OwOkKT06Bnb5gYdZQBviwqafVpZvMrt7Jndf+UYUcJ6C6NblyUmQn0LKPTEu6ni4yUraebnARzh/s8o6ezOvfyc9UgGkHzCch8Tc+uIZKp7uMBTspGN5yU4AYVTIFlBgWV7gQpgQpgQpgQpgQpgQpgQpgQpgQpgQpgQpgQvMYCCpjKwvAcC2spjAytEIzLhmjn3lpo2J3LaQrfvLZvvxM2Z7OConxNdyEs5j2ZUBuy96m3JZNQ/8gY4ZZVSE2KTkp2NGEiZjlnszFYZp1HpIV/sADFkGg8hIOe5vCGjN6n/AHqo/wCvL/mxv2EZ6KE1EnmuiV07GzVNQf8A5pP8cBhYOAtxM88lNHDvBFPVeKWSa/M2ZDf5shOFZpXRjupqNodynOg7O8ujAvCZD5yOzfcCF+7CDquU9VYx0sXkmOkoYohpijSMeSKqj7hhcuLuUw1obwFYxrZBOV7jHVbFe4yhTAhTAhTAhTAhTAhTAhTAhf/Z" alt="jut logo "></div>
        <div class="tittle"> <p>jharkhand university of technology <br> <span>marks statement</span></p></div>
      </div>
      <div class="semester "> <p>b.tech 1st semester examnination - 2022 </p></div>
      <div class="detailsOfStudent">
        <div><p>registraion no      : 22013440069</p></div>
        <div><p>name                 : Rakes singh</p></div>
        <div><p>institute             : r.v.s college of enginnering and technology, jamshedpur</p></div>
        <div><p>branch name           : computer science & engineering.</p></div>
        <div><p>exam(month/year)  :march - april-2023</p></div>
      </div>
      <div class="marks">
      <table>
          <thead>
            <tr>
              <th style="width: 65%;">[subject code] name of the subject</th>
              <th style="width: 100px;">credit</th>
              <th style="width: 150px;">full marks<br> ese/marks</th>
              <th style="width: 100px;">grade</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td colspan="4" style="color: darkblue; font-weight: bold; text-align:left;">theory paper</td>
            </tr>
            <tr>
              <td style="text-align:left;">[bsc 101] physics I</td>
              <td>4</td>
              <td>70/30</td>
              <td>A</td>
            </tr>
            <tr>
              <td style="text-align:left;">[bsc 101] physics I</td>
              <td>4</td>
              <td>70/30</td>
              <td>A</td>
            </tr>
            <tr>
              <td style="text-align:left;">[bsc 101] physics I</td>
              <td>4</td>
              <td>70/30</td>
              <td>A</td>
            </tr>
            <tr>
              <td colspan="4" style="color: darkblue; font-weight: bold; text-align:left;">theory paper</td>
            </tr>
            <tr>
              <td style="text-align:left;"  >[bsc 101] physics I</td>
              <td>4</td>
              <td>70/30</td>
              <td>A</td>
            </tr>
            <tr>
              <td style="text-align:left;">[bsc 101] physics I</td>
              <td>4</td>
              <td>70/30</td>
              <td>A</td>
            </tr>
            <tr>
              <td style="text-align:left;">[bsc 101] physics I</td>
              <td>4</td>
              <td>70/30</td>
              <td>A</td>
            </tr>
            <tr>
              <td style="text-align: right; color: #ff00008d; font-weight: bold;">total credit</td>
              <td style="text-align: left; color: #ff00008d; font-weight: bold;" colspan="3">17.5</td>
            </tr>
            <tr>
              <td style="text-align: right; color: #ff00008d; font-weight: bold;">sgpa</td>
              <td style="text-align: left; color: #ff00008d; font-weight: bold;" colspan="3">9.5</td>
            </tr>
          </tbody>
        </table>

      </div>
       <div class="gradePerformance">
        <p>% of marks obtains with letter grade & performance  : - </p>
       </div>
       <table class="no-border-table" style="padding-left:20px; margin-left: 65px;">
        <tr>
          <td style=" width:85px; text-align:left;">90% and above</td>
          <td style="width:75px; text-align:left">:   A+</td>
          <td style="width:75px; text-align:left">Excellent</td>
        </tr>
        <tr>
          <td style=" width:85px; text-align:left;">89% to 80%</td>
          <td style="width:75px ;text-align:left">:  A </td>
          <td style="width:75px; text-align:left">Very Good</td>
        </tr>
        <tr>
          <td style="width:85px; text-align:left;">79% to 70%</td>
          <td style="width:75px; text-align:left;">:  B+</td>
          <td style="width:75px; text-align:left">Good</td>
        </tr>
        <tr>
          <td style=" width:px; text-align:left;">69% to 60%</td>
          <td style="width:75px; text-align:left;">:  B</td>
          <td style="width:75px; text-align:left">Fair</td>
        </tr>
        <tr>
          <td style=" width:75px; text-align:left;">59% to 50%</td>
          <td style="width:75px; text-align:left;">:  C+</td>
          <td style="width:75px; text-align:left">Average</td>
        </tr>
        <tr>
          <td style="width:75px; text-align:left;">49% to 40%</td>
          <td style="width:75px;text-align:left;">:  C</td>
          <td style="width:75px; text-align:left">Pass</td>
        </tr>
        <tr>
          <td style="width:75px; text-align:left;"><=40%</td>
          <td style="width:75px; text-align:left;">:  F</td>
          <td style="width:75px; text-align:left">Fail</td>
        </tr>
      </table>
      
        <div class="conversion">
          <div>Conversion Fomula:</div>
          <div>%marks - (CGPA - 0.5) * 10.0</div>
          <div>Abbreviation</div>
          <div>ESE:- End Semester Examination.</div>
          <div>MSE:- Mid Semester Examination.</div>
        </div>
       
    <div class="footer">
          <div><p>Date of Result: 15/09/23</p></div>
          <div><p>Controller of Examination</p></div>
        </div>

       


    </div>
  </div>

  

  
  
  
</body>
</html>';

$dompdf->loadHtml($html);

$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();

?>