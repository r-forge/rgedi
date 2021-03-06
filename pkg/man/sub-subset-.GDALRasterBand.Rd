% Generated by roxygen2: do not edit by hand
% Please edit documentation in R/gdalBindings.R
\name{[[<-.GDALRasterBand}
\alias{[[<-.GDALRasterBand}
\title{GDALRasterBand [[]]= setter}
\usage{
\method{[[}{GDALRasterBand}(x, blockX, blockY) <- value
}
\arguments{
\item{x}{GDALRasterBand. Automatically obtained from GDALDataset[[]] call.}

\item{blockX}{Integer. The x index for block to access.}

\item{blockY}{Integer. The y index for block to access.}

\item{value}{Integer. The value buffer to write}
}
\value{
Nothing, this is a setter
}
\description{
This function gives access to the GDALRasterBand using [[i]], where i is the band index to return.
}
